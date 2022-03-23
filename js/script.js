const codePostal = document.querySelector("[data-postal-code]");
const jsResult = document.querySelector("[data-js-result]");
const textField = document.querySelector("[data-textfield]");
const errorField = document.querySelector("[data-form-error-message]");

codePostal.addEventListener("input", () => {
    if (codePostal.value.length == 5)
    {
        fetch(`https://apicarto.ign.fr/api/codes-postaux/communes/${codePostal.value}`)
        .then (res => {
            if (res.ok)
            {
                res.json()
                .then(data => {
                    let cityValues = "";
                    if (data.length == 1) // si l'objet retourné ne contient qu'un seul élément
                    {
                        cityValues = data[0].nomCommune;

                        jsResult.classList.add("disable");
                        textField.type = "text";
                        textField.value = cityValues;
                    }
                    else
                    {
                        for(const value of data)
                        {
                            const nomCommune = value.nomCommune;
                            cityValues += `<option>${nomCommune}</option>`;
                        }
                        cityValues = `<select>${cityValues}</select>`;

                        textField.type = "hidden";
                        jsResult.classList.remove("disable");
                        jsResult.innerHTML = cityValues;
                    }
                    console.log(cityValues);
                })
            }
            else // si le code de statut HTTP n'est pas un code de réussite (2**)
            {
                textField.type = "text";
                textField.value = null;
                jsResult.classList.add("disable");

                errorField.classList.remove("disable-w-transition");
                errorField.innerHTML = "Le code postal demandé n'existe pas.<br />Veuillez réessayer.";

                let errorTimeout = setTimeout(() => {
                    clearTimeout(errorTimeout);
                    errorField.classList.add("disable-w-transition");
                }, 3000);
            }
        });
    }
});
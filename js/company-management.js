function isInt(n) { return (n === +n && n !== (n|0)) || (n === +n && n === (n|0)); }


function httpGet(theUrl)
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false );
    xmlHttp.send( null );
    return xmlHttp.responseText;
}

function reset()
{
    $('#city')
    .empty()
    .append(new Option('-- Choose your city --', '0'));
}

$(document).ready(function() {
    $('#codePostal').keyup(function() {
        var content = $('#codePostal').val();
        if ((content.length == 5) && (isInt(parseInt(content)))){

            var result = httpGet("https://apicarto.ign.fr/api/codes-postaux/communes/" + content);
            var result_json = JSON.parse(result);
            reset();
                if (result_json.length > 1)
                {
                    for (let index = 0; index < result_json.length; index++) {
                        $('#city').append(new Option(result_json[index].nomCommune, result_json[index].nomCommune));    //name puis value les paramètres
                        }
                }
                else
                {
                    $('#city')
                    .empty()
                    .append(new Option(result_json[0].nomCommune, result_json[0].nomCommune));
                }
            
        }  
    });
});

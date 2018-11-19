function connexion()
{
    // alert($('#txtNom').val());
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Ctrl_User/connection",
            data:"userName="+$('#txtNom').val(),
            success:function(data)
            {
                $("#divRegion").empty();
                $("#divVille").empty();
                $("#divRegion").append(data);
            },
            error:function()
            {
                alert("Erreur lors de la connexion");
            }
        }
    )
}

function VoirVilleDeLaRegion(idRegion)
{
    // alert(idRegion);
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Ctrl_Ville/VilleDeLaRegion",
            data:"idRegion="+idRegion,
            success:function(data)
            {
                $("#divVille").empty();
                $("#divVille").append(data);
            },
            error:function()
            {
                alert("Erreur lors de la visualisation des villes de la région");
            }
        }
    )
}

function ajouterScore()
{
    // alert("ajouterScore");
    var idRegion = document.querySelector('input[name="nomRegion"]:checked').value;
    // var idVille = document.querySelector('input[name="nomVille"]:checked').value;
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Ctrl_Ville/AjoutDuScore",
            data:"idRegion="+idRegion,
            success:function(data)
            {
                connexion();
                VoirVilleDeLaRegion(idRegion);
            },
            error:function()
            {
                alert("Erreur lors de l'ajout du score'");
            }
        }
    )
}
function creerUneConf()
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Ctrl_CreerConf/getAllInformationsOfForm",
            data:"",
            success:function(data)
            {

            },
            error:function()
            {

            }
        }
    )
}
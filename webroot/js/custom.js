$(function(){
    // file for custom js code

    // Ajax csrf token setup
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
        }
    });

    // ajax request to save provider
    $("#frm-add-provider").on("submit", function(){

        var postdata = $("#frm-add-provider").serialize();
        $.ajax({
            url: "/ajax-add-provider",
            data: postdata,
            type: "JSON",
            method: "post",
            success:function(response){
                
                window.location.href = '/list-providers'
            }
        });
    });

    // ajax request to update provider
    $(document).on("submit", "#frm-edit-provider", function(){

        var postdata = $("#frm-edit-provider").serialize();

        $.ajax({
            url: "/ajax-edit-provider",
            data: postdata,
            type: "JSON",
            method: "post",
            success:function(response){
                
                window.location.href = '/list-providers'
            }
        });
    });

    // ajax request to delete provider
    $(document).on("click", ".btn-delete-provider", function(){

        if(confirm("Are you sure want to delete the provider:  "+ $(this).attr("data-Name"))){

            var postdata = "provider_ID=" + $(this).attr("data-ID");
            $.ajax({
                url: "/ajax-delete-provider",
                data: postdata,
                type: "JSON",
                method: "post",
                success:function(response){
                    
                    window.location.href = '/list-providers'
                }
            });
        }
    });
});
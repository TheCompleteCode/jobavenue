$(document).ready(function(){   
    $('#register').on('click', function(){
        $('#register_modal').modal('show');
    }); 

    $('#login').on('click', function(){
        $('#login_message').hide();
        $('#login_modal').modal('show');
    });
    
    $("#btn_login").on('click', function(e){
        $('#login_message').text('');
        $('#loader_modal').modal('show');
        
        $.ajax({
            url: '/jobavenue/users/login',
            type: 'POST',
            data: $('#login_modal :input').serialize()
        }).done(function(response){
            $('#loader_modal').modal('hide');            
            if(response == 'success'){
                $('#success_modal').modal('hide');
                $('#login_message').append('You\'re logged in successfully!')
                                   .addClass('result-success')
                                   .show();
                //redirect to index page
                setTimeout(function(){
                    window.location.replace('http://localhost/jobavenue/');
                },1000);
            }else {
                $('#login_message').append('Invalid Username or Password.')
                                   .addClass('result-failed')
                                   .show();
            }
        });
    });
    
    $("#registration_form").submit(function(e){
        $('#loader_modal').modal('show');
        $.ajax({
            url: '/jobavenue/users/addUser',
            type: 'POST',
            data: $('#registration_form').serialize()
        }).done(function(response){
            $('#loader_modal').modal('hide');            
            if(response == 'success'){
                $('#success_modal').modal('show');
                setTimeout(function(){
                    $('#success_modal').modal('hide');
                    //redirect to index page
                    window.location.replace('http://localhost/jobavenue/');
                },1000);            
            }else {                
                alert('Unable to register new user this time.');
            }
        }).fail(function(){
            $('#loader_modal').modal('hide');
            alert('Server error. Try again later.');
        });
        return false;
        e.preventDefault();
    });
    
    /*function formValidation(id)
    {
        if($.trim($(id).val()).length == 0){
            $(id).addClass('invalid-input');
            return error = true;
        }else {
            $(id).removeClass('invalid-input');
        }
    }
    use to capture the id of the click el
    $('#main_div').on('click','span',function(e){
     console.log(e.target.id)
     })*/
});
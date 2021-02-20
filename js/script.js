$(document).ready(function() {

    $('#submit').click(function(e){

        e.preventDefault();

        const name = $('#n').val();
        const email = $('#e').val();
        const message = $('#m').val();


      
               
        if((name != '') & (email != '') & (message != '')){

            let ConsDdata ='name= ' + name +' & email =' + email+' & message =' + message;
            console.log(ConsDdata);

            $.ajax({
                type: "POST",
                url:"script.php",
                data:ConsDdata,
                success:function(){

                $('#respons').html('<span style="color:green">message sent</span>');
                $('#name').val('');
                $('#email').val('');
                $('#name').removeClass('bg');
                $('#email').removeClass('bg');
                $('#p').html(ConsDdata);
                
                    setTimeout(function(){
                        $('#respons').html('');
                    },4000);
                    
                    // alert('It was success');
                

                    
                }
            });
        }else{
            if(!$('#name').val() & !$('#email').val() ){
                $('#name').addClass('bg');
                $('#email').addClass('bg');
                $('#respons').html('<span style="color:red"><i>Fill all the field please</i></span>');
    
            }else{            
           
                if(!$('#name').val()){
                    $('#name').addClass('bg');
                    $('#respons').html('<span style="color:red"><i>Put Your Name</i></span>');
        
                }else{
                    $('#name').removeClass('bg'); 
                }
                if(!$('#email').val()){
                    $('#email').addClass('bg');
                    $('#respons').html('<span style="color:red"><i>Email</i></span>');
                }else{
                    $('#email').removeClass('bg'); 
                }
            }
           
        }
        

    });
})

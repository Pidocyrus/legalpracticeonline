   $(document).ready(function(){



//block user
    $("body").delegate(".block","click",function(event){

   if(confirm("Are you sure you want to Block this Account?")){
            
         var remove_id = $(this).attr('remove_id');
        $.ajax({
            url :   "action.php",
            method  :   "POST",
            data    :   {blockuser:1,rid:remove_id},
            success :   function(data){
                $("#del_msg").html(data);//data here means the success msg that will echo from php  
            }
        })
            }       
    })

//approve request in admin page
    $("body").delegate(".approve","click",function(event){

   if(confirm("Are you sure you want to Approve this Pending?")){            
         var approve_id = $(this).attr('approve_id');
          var email = $(this).attr('email');
        $.ajax({
            url :   "action.php",
            method  :   "POST",
            data    :   {approve:1,rid:approve_id,em:email},
            success :   function(data){
                $("#del_msg").html(data);
            }
        })
            }       
    })


//decline request in admin page
    $("body").delegate(".decline","click",function(event){

   if(confirm("Are you sure you want to Decline this Pending?")){            
         var decline_id = $(this).attr('decline_id');
        $.ajax({
            url :   "action.php",
            method  :   "POST",
            data    :   {decline:1,rid:decline_id},
            success :   function(data){
                $("#del_msg").html(data);
            }
        })
            }       
    })


//verify user
    $("body").delegate(".verify","click",function(event){

   if(confirm("Are you sure you want to Verify this User?")){            
         var verify_id = $(this).attr('verify_id');
          var email = $(this).attr('email');
        $.ajax({
            url :   "action.php",
            method  :   "POST",
            data    :   {verify:1,rid:verify_id,em:email},
            success :   function(data){
                $("#del_msg").html(data);
            }
        })
            }       
    })




   })
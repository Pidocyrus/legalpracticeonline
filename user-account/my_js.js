$(document).ready(function(){
	
//to caculate the btc conversion when a user want to fund on wallet page
	// $("body").delegate("#fund_amount","keyup",function(event){
	// 	event.preventDefault();
	// 	var amount = $('#fund_amount').val();
	// 	var one_btc = 0.00020; // this is one bitcon of dollar 
	// 	if (isNaN(amount)) {
	// 		btc = 0;
	// 		$('#btc_equi').val(btc);
	// 	}else{
	// 		conversation = amount * one_btc ;
	// 		$('#btc_equi').val(conversation);//to put the conversation to btc textbox
	// 	}

	// })
	

	
	//show pending funds in wallet page
	function show_pending_funds(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{getpendingfunds:1}, 
			success	:	function(data){
				$("#get_data").html(data);
			}
		})
	}

	//show pending payouts on payout page
	function show_pending_payout(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{getpendingpayout:1}, 
			success	:	function(data){
				$("#get_dat").html(data);
			}
		})
	}




		//cancel pending fund
	$("body").delegate(".remove","click",function(event){

   if(confirm("Are you sure you want to cancel this pending Deposit?")){	
         var remove_id = $(this).attr('remove_id');
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{cancel_pendingfund:1,rid:remove_id},
			success	:	function(data){
				$("#res_msg").html(data);
				show_pending_funds();
			}
		})
			}		
	})

		//cancel pending payout
	$("body").delegate(".del","click",function(event){

   if(confirm("Are you sure you want to cancel this pending Withdrawal?")){	
         var remove_id = $(this).attr('remove_id');
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{cancel_pendingpayout:1,rid:remove_id},
			success	:	function(data){
				$("#res_msg").html(data);
				show_pending_payout();
			}
		})
			}		
	})




















show_pending_funds();
show_pending_payout();


	})
<?php 
include('header.php');
?>

<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/ajax.js"></script>
<body id="page-top">
     <header class="masthead d-flex">
         <div class="container text-center my-auto">
            <h1 class="mb-1">Currency Converter</h1>
            <h3 class="mb-5"> 
                <em>Foreign Exchange Rates</em>
            </h3>
            <div class="container">
                <h3>This currency converter helps you to check how much you should get when you convert your currency into another	</h3>
              
              <form method="post" id="currency-form"> 		
		          <div class="form-group">
		              <label>From</label>
			             <select name="from_currency">
				            <option value="INR">Indian Rupee</option>
				            <option value="USD" selected="1">US Dollar</option>
				            <option value="AUD">Australian Dollar</option>
				            <option value="EUR">Euro</option>
				            <option value="EGP">Egyptian Pound</option>
				            <option value="CNY">Chinese Yuan</option>
			             </select>	
			
                    &nbsp;<label>To</label>
			             <select name="to_currency">
				            <option value="INR" selected="1">Indian Rupee</option>
				            <option value="USD">US Dollar</option>
				            <option value="AUD">Australian Dollar</option>
				            <option value="EUR">Euro</option>
				            <option value="EGP">Egyptian Pound</option>
				            <option value="CNY">Chinese Yuan</option>
			             </select>			
                    &nbsp;<label>Amount</label>	
			             <input type="text" placeholder="Amount" name="amount" id="amount" />			
                        &nbsp;&nbsp;<button type="submit" name="convert" id="convert" class="btn btn-default">Convert</button>
		          </div>			
	           </form>	
	           <div class="form-group" id="converted_rate"></div>	
               <div id="converted_amount"></div>	
           </div>    
        </div>
        <div class="overlay"></div>
    </header>
</body>
<?php include('footer.php');?>



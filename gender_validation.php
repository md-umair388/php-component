<html>
  <head>
 <script>
  function ValidateForm(form){
  ErrorText= "";
  if ( ( form.gender[0].checked == false ) && ( form.gender[1].checked == false ) ) 
  {
  alert ( "Please choose your Gender: Male or Female" ); 
  return false;
  }
  if (ErrorText= "") { form.submit() }
  }
 </script>
 </head>
  <body>
 <form name="feedback" action="#" method=post>
   Gender: 
     <input type="radio" name="gender" value="Male"> Male
  <input type="radio" name="gender" value="Female"> Female
  
    
    <input type="submit" name="SubmitButton" value="Submit" onClick="ValidateForm(this.form)">
 <input type="reset" value="Reset">
  </form> 
  </body>
  </html>
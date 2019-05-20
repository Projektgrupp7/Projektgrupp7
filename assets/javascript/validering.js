function reg_val()
{
  //HEJSAN ALLIHOPA
  let email = document.form.email.value;
  let password = document.form.password.value;
  let name = document.form.namn.value;
  //Kontrollerar om ett namn är tomt eller endast whitespaces
  if(!(/\S+/).test(name))
  {
    alert("Ange ett namn");
    return false;
  }
  else{
    return log_val();
  }
}

//Validering av formdata från inloggning
function log_val()
{
  let email = document.form.email.value;
  let password = document.form.password.value;
  //Kontrollerar så att email har @.-format
    if(!(/\S+@\S+\.\S+/.test(email)))
    {
      alert("Felaktigt angiven email.");
      return false;
    }

  //Kontrollerar så att lösenordet ej är endast whitespaces eller <8 tecken.
      if(!(/\S+/).test(password)||password.length<8)
    {
      alert("Felaktikgt lösenord. (minst 8 tecken)");
      return false;
    }

    else{
       return true;
     }
  }

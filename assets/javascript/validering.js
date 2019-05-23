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

//HEJ
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

  //Validerar alla obligarotiska fält för nya recept på clientsidan
  function rec_val(){
    let recname = document.recipe.recipename.value;
    let recdesc = document.recipe.description.value;
    let recingr = document.recipe.ingredients.value;
    let recinst = document.recipe.instructions.value;
    let time = document.recipe.time.value;

    if(!(/\S+/).test(recname) || !(/\S+/).test(recdesc) ||!(/\S+/).test(recingr)
    ||!(/\S+/).test(recinst))
    {
      alert("Vänligen fyll i samtliga textfält.");
      return false;
    }

    if(!(/\S+/).test(time) || isNaN(time))
    {
      alert("Vänligen fyll i tiden i antal minuter.");
      return false;
    }

    else {
      return true;
    }


  }

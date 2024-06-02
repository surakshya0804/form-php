const form = document.getElementById("form");
form.addEventListener("submit", (e) => {
  e.preventDefault();
  if (validateInputs()) {
    {
        form.onsubmit();
    }
  } else {
    console.log("Form has error!");
  }
});
function validateInputs() {
  let errors = 0;
  name1 = document.getElementById("n0");
  id1 = document.getElementById("n1");
  contant1 = document.getElementById("n2");
  password1 = document.getElementById("n3");
  confirm1 = document.getElementById("n4");
  name_error = document.getElementById("name_error");
  id_error = document.getElementById("id_error");
  contant_error = document.getElementById("contant_error");
  password_error = document.getElementById("password_error");
  confirm_error = document.getElementById("confirm_error");

  var email_check =
    /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

  if (name1.value == null || name1.value === "") {
    errors++;
    name_error.innerHTML = "Name is required";
  }
  if (!id1.value.match(email_check)) {
    errors++;
    id_error.innerHTML = "Email is required";
  }
  if (
    !contant1.value.length == 10
) {
  errors++;
  contant_error.innerHTML = "Contant must be upto 10 digits";
}

if (password1.value.length <= 8) {
  errors++;
  password_error.innerHTML = "Password must be more than 8 character";
}
if (password1.value != confirm1.value ) {
  errors++;
  
  confirm_error.innerHTML = "Password do match";

}
if (errors <= 0) {
  return true;
} else {
  return false;
}
}
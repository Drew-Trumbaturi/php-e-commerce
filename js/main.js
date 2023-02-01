$(document).ready(function (e) {
  var $window = $(window);
  let $uploadFile = $('#register .upload-profile-image input[type="file"]');

  $uploadFile.change(function () {
    readURL(this);
  });

  // Function to handle changes to style classes based on window width
  function checkWidth() {
    if ($window.width() < 980) {
      $("#navbarSupportedContent")
        .removeClass("collapse navbar-collapse")
        .addClass("offcanvas offcanvas-start px-2");
    }

    if ($window.width() >= 980) {
      $("#navbarSupportedContent")
        .removeClass("offcanvas offcanvas-start px-2")
        .addClass("collapse navbar-collapse");
    }
  }

  // Execute on load
  checkWidth();

  // Bind event listener
  $(window).resize(checkWidth);

  $("#registration-form").submit(function (event) {
    let $password = $("#Password");
    let $confirm = $("#ConfirmPassword");
    let $error = $("#confirmation_error");

    if ($password.val() === $confirm.val()) {
      return true;
    } else {
      $("#Password").addClass("is-invalid");
      $("#ConfirmPassword").addClass("is-invalid");
      $error.text("Passwords do not match");
      event.preventDefault();
      event.stopPropagation();
    }
  });
});

var $error = $("#validation_error");

function readURL(input) {
  if (input.files && input.files[0]) {
    let reader = new FileReader();
    reader.onload = function (e) {
      $("#register .upload-profile-image .img").attr("src", e.target.result);
      $("#register .upload-profile-image .camera-icon").css({
        display: "none",
      });
    };
    reader.readAsDataURL(input.files[0]);
  }
}

$("#Password").on("blur", function (e) {
  if (this.value.length < 8) {
    $("#Password").addClass("is-invalid");
    $error.text("Password must be at least 8 characters");
    $(this).focus();
    return false;
  } else {
    $("#Password").removeClass("is-invalid");
    $error.text("");
    return true;
  }
});

// Set theme to the user's preferred color scheme
function updateTheme() {
  const colorMode = window.matchMedia("(prefers-color-scheme: dark)").matches
    ? "dark"
    : "light";
  document.querySelector("html").setAttribute("data-bs-theme", colorMode);
}

// Set theme on load
updateTheme();

// Update theme when the preferred scheme changes
window
  .matchMedia("(prefers-color-scheme: dark)")
  .addEventListener("change", updateTheme);

// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

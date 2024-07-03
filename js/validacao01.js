const form = document.querySelector('.form-content form');
const nomeInput = document.getElementById('nome');
const sobrenomeInput = document.getElementById('sobrenome');
const repeticaoInput = document.getElementById('repeticao');
const buttonClose = document.querySelector('dialog button');

form.addEventListener("submit", (event) => {
  event.preventDefault();
  checkForm();
});

nomeInput.addEventListener("blur", () => {
  ValidarNome();
});

sobrenomeInput.addEventListener("blur", () => {
  ValidarSobrenome();
});

repeticaoInput.addEventListener("blur", () => {
  ValidarRepeticao();
});

function ValidarNome() {
  const nomeValue = nomeInput.value.trim();
  const nomeRegex = /^[a-zA-Z\s]{3,15}$/; // Regex para 3 a 30 caracteres alfabéticos

  if (nomeValue === "") {
    errorInput(nomeInput, "Preencha o nome!");
  } else {
    if (!nomeRegex.test(nomeValue)) {
      errorInput(nomeInput, "O nome precisa ter entre 3 e 15 caracteres alfabéticos!");
    } else {
      resetError(nomeInput);
    }
  }
}

function ValidarSobrenome() {
  const sobrenomeValue = sobrenomeInput.value.trim();
  const sobrenomeRegex = /^[a-zA-Z\s]{5,30}$/; // Regex para 3 a 30 caracteres alfabéticos

  if (sobrenomeValue === "") {
    errorInput(sobrenomeInput, "Preencha o sobrenome!");
  } else {
    if (!sobrenomeRegex.test(sobrenomeValue)) {
      errorInput(sobrenomeInput, "O sobrenome precisa ter entre 5 e 30 caracteres alfabéticos!");
    } else {
      resetError(sobrenomeInput);
    }
  }
}

function ValidarRepeticao() {
  const repeticaoValue = repeticaoInput.value.trim();

  if (repeticaoValue === "") {
    errorInput(repeticaoInput, "Digite o número de repetições!");
  } else {
    const repeticaoRegex = /^\d+$/; // Regex para aceitar apenas números inteiros positivos
    if (!repeticaoRegex.test(repeticaoValue)) {
      errorInput(repeticaoInput, "Digite somente números inteiros positivos.");
    } else {
      resetError(repeticaoInput);
    }
  }
}

function checkForm() {
  ValidarNome();
  ValidarSobrenome();
  ValidarRepeticao();

  const formItems = form.querySelectorAll(".form-content")

  const isValid = [...formItems].every((item) => {
    return !item.classList.contains("error");
  });

  if (isValid) {
    form.submit(); // Envia o formulário para o PHP
  }
}

function errorInput(input, message) {
  const formItem = input.parentElement;
  const textMessage = formItem.querySelector("a");
  textMessage.innerText = message;
  formItem.classList.add("error");
}

function resetError(input) {
  const formItem = input.parentElement;
  const textMessage = formItem.querySelector("a");
  textMessage.innerText = "";
  formItem.classList.remove("error");
}

// ПОДКЛЮЧЕНИЕ ОБРАТНОЙ СВЯЗИ


let validateForms = function (selector, rules, successModal, yaGoal) {
   new window.JustValidate(selector, {
      rules: rules,
      submitHandler: function (form) {
         let formData = new FormData(form);

         let xhr = new XMLHttpRequest();

         xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
               if (xhr.status === 200) {
                  console.log('Отправлено');
                  alert('Заявка отправлена! Спасибо что выбрали нас!!!')
               }
            }
         }

         xhr.open('POST', 'mail.php', true);
         xhr.send(formData);

         form.reset();

      },

      messages: {
         name: {
            required:"Заполните поле",
            minLength: 'Введите не меньше 3-ех символов'
         },

         email: {
            required:"Заполните поле",
            email: 'В поле должны присутствовать соответствующие символы'
         },

         tel: {

            required:"Заполните поле",
            minLength: 'Введите не меньше 17-ти символов'
         }
      },
   });
}

validateForms('.feedback__form', { email: { required: true, email: true }, name: { required: true, minLength: 3, maxLength: 10 }, tel: { required: true, minLength: 17 } }, '.thanks-popup', 'send goal');

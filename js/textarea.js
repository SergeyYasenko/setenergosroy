/*============TEXTAREA=================================================================*/

$('textarea').on('input', function () {
   $(this)
      .width(50)
      .height(50)
      .width(this.scrollWidth)
      .height(this.scrollHeight);
});
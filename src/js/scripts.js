

/**
 * Selects specified text to clipboard
 * @param {string} dom element to copy
 * @export
 */

function copyToClipboard(element) {
  var temp = document.getElementById("select-text-button");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
function getCaret(el) {
  if (el.selectionStart) {
    return el.selectionStart;
  } else if (document.selection) {
    el.focus();
    var r = document.selection.createRange();
    if (r == null) {
      return 0;
    }
    var re = el.createTextRange(), rc = re.duplicate();
    re.moveToBookmark(r.getBookmark());
    rc.setEndPoint('EndToStart', re);
    return rc.text.length;
  }
  return 0;
}

$(".post-comment").on("keydown", function(e) {
  var caret = getCaret(this);
  var content = this.value;
  if (e.keyCode == 13) {
    if (!$(".add-comment .post-comment button").is(":visible")) {
      if (e.shiftKey) {
        this.value = content.substring(0, caret - 1) + "\n" + content.substring(caret, content.length);
        event.stopPropagation();
      } else {
        $(".post-comment").submit();
        return false;
        event.stopPropagation();
      }
    }
  }
});

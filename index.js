function show_text(){
    var str = $('#fname').val() + '-re-y -i ' + $('#finput').val() + ' -' + $('#vcodec').val() + ' -' + $('#acodec').val() + ' -f mpgets upd://' + $('#fout').val();
    $('#show_result').val(str);
}
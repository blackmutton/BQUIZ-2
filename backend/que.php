<fieldset>
    <legend>新增問卷</legend>
    <div style="display:flex">
        <div class="clo" style="width:50%">問券名稱</div>
        <div>
            <input type="text" name="subject" id="subject">
        </div>
    </div style="width:50%">
    <div id="options" class="clo">
        <div>
            選項<input type="text" name="option[]">
            <button onclick="more()">更多</button>
        </div>
    </div>
    <div>
        <button>新增</button>
        <button>清空</button>
    </div>
</fieldset>
<script>
    function more() {
        let opt = `
        <div>
            選項<input type="text" name="option[]">
        </div>
        `
        $('#options').prepend(opt);
    }
</script>
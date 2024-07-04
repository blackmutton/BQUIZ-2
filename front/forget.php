<fieldset>
    <legend>忘記密碼</legend>
    <table>

        <div>請輸入信箱以查詢密碼</div>
        <div><input type="text" name="email" id="email"></div>


        <div id='result'>

        </div>
        <div>
            <button onclick="search()">尋找</button>
        </div>

    </table>
</fieldset>

<script>
    function search() {
        $.get('./api/forget.php', {
            email: $('#email').val()
        }, (result) => {
            $('#result').text(result)
        })


    }
</script>
<?php global $conn; ?>
<?php $data['title'] = 'About Us'; ?>
<?php ob_start(); ?>
<h2>Get data as JSON from a PHP file on the server.</h2>

<p id="demo"></p>

<script>
    function checkRespStatus(resp) {
        if (resp.status >= 200 && resp.status < 300) {
            return Promise.resolve(resp);
        } else {
            return Promise.reject(new Error(resp.statusText));
        }
        // myObj = JSON.parse(this.responseText);
        // document.getElementById("demo").innerHTML = myObj.name;
    };

    function respToJSON(resp) {
        return resp.json();

    }

    function injectData(data) {
        console.log(data);
        document.getElementById("demo").innerHTML = data.city;
        return;
    };

    function logError(err) {
        console.error(err);
        return;
    }

    fetch('http://localhost:2000/vanilla.php', {
            mode: 'cors'
        })
        .then(checkRespStatus)
        .then(respToJSON)
        .then(injectData)
        .catch(logError);
</script>
<?php $data['main_content'] = ob_get_clean(); ?>
<?php require '../templates/base.php'; ?>
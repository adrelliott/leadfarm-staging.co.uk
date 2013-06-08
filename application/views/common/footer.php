</body>
</html>
<?php 
    if (isset($_GET['debug']) && ENVIRONMENT !== 'production') 
    {
        print_array($_SESSION, 0, 'PHP Session');
        print_array($this->data, 0, '$this->data');
    }
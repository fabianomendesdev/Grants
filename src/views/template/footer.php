<footer class="footer">
    <div class="container-md">
        <!-- <a href="https://storyset.com/education">Education illustrations by Storyset</a> -->
    </div>
</footer>
<script src="assets/js/script.js"></script>
<?php 
    if(!empty($loadJs)){
        foreach($loadJs as $value){
            echo "<script src='assets/js/$value.js'></script>";
        }
    }
?>
</body>
</html>
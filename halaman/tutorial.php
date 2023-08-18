<div class="judul">
    <h2>Penjelasaan App Booking Shooting Area dan Sewa Senjata</h2>
    <hr/>

    <pre>
    <?php 
        $myfile = fopen('readme.txt', 'r') or die("Unable to Open File");

        echo fread($myfile, filesize('readme.txt'));
        fclose($myfile);
    ?>/
    </pre>
</div>
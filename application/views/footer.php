</div> <!-- /#main from header.php -->

</body>

<?php foreach($js as $script): ?>
<script type="text/javascript" src="<?php echo base_url().'assets/js/'.$script; ?>"></script>
<?php endforeach; ?>
</html>

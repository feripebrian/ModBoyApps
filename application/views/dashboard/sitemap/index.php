<?php
header('Content-type: application/xml; charset="ISO-8859-1"', true);
?>


<urlset>
	<url>
		<loc><?php echo base_url() ?></loc>
		<lastmod>2021-11-11T10:45:41+00:00</lastmod>
		<priority>1.00</priority>
	</url>
	<url>
		<loc><?php echo base_url() ?>game/</loc>
		<lastmod>2021-11-11T10:45:41+00:00</lastmod>
		<priority>1.00</priority>
	</url>
	<url>
		<loc><?php echo base_url() ?>apk/</loc>
		<lastmod>2021-11-11T10:45:41+00:00</lastmod>
		<priority>1.00</priority>
	</url>

	<!--COPY DISINI KE BAWAH-->

	<?php foreach ($post as $item) { ?>
		<url>
			<loc><?php echo base_url('view/' . $item['kategori'] . '/' . $item['uri']) ?></loc>
			<lastmod><?php echo $item['date_upload'] ?>T<?php echo $item['time_upload'] ?>+00:00</lastmod>
			<priority>0.80</priority>
		</url>
	<?php } ?>
	<?php foreach ($tutorial as $tutor) { ?>
		<url>
			<loc><?php echo base_url('read/' . $tutor['uri']) ?></loc>
			<lastmod><?php echo $tutor['date_upload'] ?>T<?php echo $item['time_upload'] ?>+00:00</lastmod>
			<priority>0.80</priority>
		</url>
	<?php } ?>
</urlset>

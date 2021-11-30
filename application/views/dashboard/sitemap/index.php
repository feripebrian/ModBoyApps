<?php
$xmlString = '<?xml version="1.0" encoding="UTF-8"?>
    <urlset
  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
  xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"
  xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

  
  <url>
	<loc>' . base_url() . '</loc>
	<lastmod>2021-11-11T10:45:41+00:00</lastmod>
	<priority>1.00</priority>
</url>
<url>
	<loc>' . base_url() . 'game/</loc>
	<lastmod>2021-11-11T10:45:41+00:00</lastmod>
	<priority>1.00</priority>
</url>
<url>
	<loc>' . base_url() . 'apk/</loc>
	<lastmod>2021-11-11T10:45:41+00:00</lastmod>
	<priority>1.00</priority>
</url>';

foreach ($game as $item) {
	$xmlString .= '<url>';
	$xmlString .= '<loc>' . base_url('game/' . $item['kategori'] . '/' . $item['uri']) . '</loc>';
	$xmlString .= '<lastmod>' . $item['date_upload'] . 'T' . $item['time_upload'] . '+00:00</lastmod>';
	$xmlString .= '<priority>0.80</priority>';
	$xmlString .= '</url>';
}
foreach ($apk as $item) {
	$xmlString .= '<url>';
	$xmlString .= '<loc>' . base_url('apk/' . $item['kategori'] . '/' . $item['uri']) . '</loc>';
	$xmlString .= '<lastmod>' . $item['date_upload'] . 'T' . $item['time_upload'] . '+00:00</lastmod>';
	$xmlString .= '<priority>0.80</priority>';
	$xmlString .= '</url>';
}
foreach ($tutorial as $tutor) {
	$xmlString .= '<url>';
	$xmlString .= '<loc>' . base_url('tutorial/' . $tutor['uri']) . '</loc>';
	$xmlString .= '<lastmod>' . $tutor['date_upload'] . 'T' . $tutor['time_upload'] . '+00:00</lastmod>';
	$xmlString .= '<priority>0.80</priority>';
	$xmlString .= '</url>';
}
foreach ($emulator as $emu) {
	$xmlString .= '<url>';
	$xmlString .= '<loc>' . base_url('emulator/' . $emu['id_kategori'] . '/' .  $emu['uri']) . '</loc>';
	$xmlString .= '<lastmod>' . $emu['date_upload'] . 'T' . $emu['time_upload'] . '+00:00</lastmod>';
	$xmlString .= '<priority>0.80</priority>';
	$xmlString .= '</url>';
}
foreach ($rom as $ro) {
	$xmlString .= '<url>';
	$xmlString .= '<loc>' . base_url('rom/' . $ro['id_kategori'] . '/' . $ro['uri']) . '</loc>';
	$xmlString .= '<lastmod>' . $ro['date_upload'] . 'T' . $ro['time_upload'] . '+00:00</lastmod>';
	$xmlString .= '<priority>0.80</priority>';
	$xmlString .= '</url>';
}
?>
<?php $xmlString .= '</urlset>'; ?>

<?php
$dom = new DOMDocument;
$dom->preserveWhiteSpace = FALSE;
$dom->loadXML($xmlString);
if ($dom->save('sitemap.xml')) {
	$this->session->set_flashdata('success', 'Site Map Created SuccessFully');
	redirect('dashboard/sitemap/sitemap/sit');
} else {
	echo "<h2></h2>";
	$this->session->set_flashdata('failed', 'Site Map Created Failed');
	redirect('dashboard/sitemap/sitemap/sit');
}
?>

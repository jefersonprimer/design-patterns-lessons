<?php
require_once './hostgator_influenciadores.php';
require_once './youtube_channel.php';

$cdftv = new YoutubeChannel ('Codigo fonte tv', 'codigofontetv');
$attekitaDev = new YoutubeChannel ('AtekitaDev', 'Ucibvbsivsdofisd798a');
$diolinux = new YoutubeChannel ('Diolinux', '2837hd9wfh9h');
$pgdinamica = new YoutubeChannel ('Programção Dinamica', 'c7dhs9');
$rodrigobranas = new YoutubeChannel ('Rodrigo Branas', '898chaiscns8');
$tekzoom = new YoutubeChannel ('TekZoom', 'c89jcndcn');

$hostGatorInfluenciadores = HostgatorInfluenciadores::getInstance()
$hostGatorInfluenciadores->setMembers([$cdftv, $attekitaDev, $diolinux]);

// Forcei com o singleton ter apenas uma instancia só, independente de quantas vezes pega o getInstance
$hostGatorInfluenciadores2 = HostgatorInfluenciadores::getInstance()
$hostGatorInfluenciadores2->setMembers([$pgdinamica, $rodrigobranas, $tekzoom]);

echo ("n\nTime #1\n");
var_dump($hostGatorInfluenciadores);
 
echo ("n\nTime #2\n");
var_dump($hostGatorInfluenciadores2);

// mais uma comparação 
echo ("n\nComparação\n");
var_dump($hostGatorInfluenciadores === $hostGatorInfluenciadores2);
>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->css(['about/all.min', 'about/bootstrap.min', 'about/style']); ?>
	<?php $this->Html->meta('image/png', 'about/logo.png'); ?>
	<title>About</title>
</head>
<body>
	<header class="bg-white container-fluid">
		<div class="cover">
			<div class="container-fluid" style="padding-top: 10px">
				<div class="row">
					<div class="col-md-2"></div>
				    <div class="logo mx-auto"></div>
				    <div class="col-md-2">
				    	<a href="https://github.com/rodchenk/elegia">
				    		<div class="git float-right"></div>
				    	</a>
				    </div>
				</div>
			</div>
			<div class="labels">
				<span>FOOD</span>
				<span>FRUITS</span>
				<span>SNACKS</span>
				<span>DRINKS</span>
			</div>
			<div class="row" style="max-width: 100%">
				<div class="col-md-6"></div>
				<div class="col-md-6 flot-right delivered-block bg-danger-transparent text-light">
					<span>and <b>much more</b> delivered to your office door</span>
				</div>
			</div>
		</div>
	</header>
	<main>
		<div class="container-fluid bg-light custom-block">
			<div class="container">
				<div class="row vertical-align">
					<div class="col-md-4" style="align-items: baseline;top:-50px">
						<?= $this->Html->image('about/info2.png', ['alt' => 'CakePHP', 'class' => 'height-30']); ?>
					</div>
					<div class="col-md-8">
						<span class="custom-text text-dark">
							<h1>Was machen wir?</h1>
							"Elegia" agiert als Vermittler zwischen Unternehmen (als Internetbenutzer) und den Lebensmittel-Lieferanten. Wir entwickeln <b>ein auf das Onlinebestellen und Liefern von Essen und Getraenken spezialisiertes Produkt</b> im Rahmen von Lehrveranstaltung Frameworks. Wir wolllen damit das Verfahren für die Unternehmen sowie fuer die Lieferanten vereinfachen, indem die Rechnungs-, Bestellungs- und Bearbeitungsprozesse mithilfe von Web-Applikation digitalisiert werden. 
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-light custom-block">
			<div class="container">
				<div class="row vertical-align">
					<div class="col-md-8">
						<span class="custom-text text-dark">
							<h1>Für wen machen wir?</h1>
							Es orientiert sich vor allem auf <b>kleine und mittlere Unternehmen</b>, die fuer ihre Mitarbeiter Obste, Wasser und Snacks bestellen. Die andere Seite in dem Prozess sind die Lager, die den Unternehmen die Gueter anbieten. Die Gueter werden direkt ins Buero geliefert. Das Unternehmen als Stammkunde bekommt Rabate, Neuigkeiten und vieles mehr.
						</span>
					</div>
					<div class="col-md-4">
						<?= $this->Html->image('about/how2.png', ['alt' => 'CakePHP', 'class' => 'height-20']); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid custom-block bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center text-white">
						<h1>Wer ist dabei?</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<?= $this->Html->image('about/who.png', ['alt' => 'CakePHP', 'class' => 'img-fluid']); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid custom-block bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-4" style="top: -50px">
						<?= $this->Html->image('about/bottle.png', ['alt' => 'CakePHP', 'class' => 'img-fluid']); ?>
					</div>
					<div class="col-md-8">
						<span class="custom-text text-dark">
							<h1>Wasser</h1>
							Der menschliche Körper besteht zu etwa 70% aus Wasser. Die Produktivität der Mitarbeiter ist stark von der Qualität vom Wasser abhängig. „Elegia“ bietet die Möglichkeit an, dass jeder einzelne Mitarbeiter exakt das passende Getränk für sich auswählen kann. 
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- 
		<div class="container-fluid bg-light position-relative">
			<div class="container">
				<div class="row position-relative" style="z-index: 2">
					<div class="col-md-4">
						<span class="custom-text text-dark">
							<h1>Obst</h1>
							Mit Frische Obst und Gemüse bleibt man gesund und erhalt wichtige Vitaminen.
						</span>
					</div>
					<div class="col-md-8">
						<img src="src/fruit.png" class="img-fluid">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 custom-bg-cover" style="background-color: #28a745c7"></div>
			</div>
		</div> 
		-->
		<div class="container-fluid custom-block" style="background-color: #26334a">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center text-light">
						<h1>Wie machen wir?</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<?= $this->Html->image('about/arch.png', ['alt' => 'CakePHP', 'class' => 'img-fluid']); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid custom-block bg-white">
			<div class="container position-relative">
				<div class="row text-secondary">
					<div class="col-md-12 text-center">
						<h1>ER-Diagramm und Tabellenansicht</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="mxgraph" style="max-width:100%;border:1px solid transparent;" data-mxgraph="{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;resize&quot;:true,&quot;toolbar&quot;:&quot;zoom layers lightbox&quot;,&quot;edit&quot;:&quot;_blank&quot;,&quot;xml&quot;:&quot;&lt;mxfile userAgent=\&quot;Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36\&quot; version=\&quot;9.4.6\&quot; editor=\&quot;www.draw.io\&quot; type=\&quot;github\&quot;&gt;&lt;diagram id=\&quot;528c8cc6-f1f5-37f2-9d06-14f659258eb0\&quot; name=\&quot;Page-1\&quot;&gt;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&lt;/diagram&gt;&lt;/mxfile&gt;&quot;}"></div>
					</div>
					
					<div class="col-md-6">
						<div class="mxgraph" style="max-width:100%;border:1px solid transparent;" data-mxgraph="{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;resize&quot;:true,&quot;toolbar&quot;:&quot;zoom layers lightbox&quot;,&quot;edit&quot;:&quot;_blank&quot;,&quot;xml&quot;:&quot;&lt;mxfile userAgent=\&quot;Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36\&quot; version=\&quot;9.4.6\&quot; editor=\&quot;www.draw.io\&quot; type=\&quot;github\&quot;&gt;&lt;diagram id=\&quot;5685fb7f-3b16-362a-a580-ad154ea4a24e\&quot; name=\&quot;Page-1\&quot;&gt;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&lt;/diagram&gt;&lt;/mxfile&gt;&quot;}"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-dark">
			<div class="row">
					<div class="col-md-12 mx-auto sql" style="border-radius: 3px; padding: 15px;padding-left: 50px;max-height: 60vh;overflow-y: scroll;color: #bde2f1">
						<span class="text-danger">SET</span> <span class="text-orange">SQL_MODE</span>=<span class="text-cyan">"NO_AUTO_VALUE_ON_ZERO"</span>;<br>
						<span class="text-danger">SET</span> <span class="text-orange">time_zone</span> = <span class="text-cyan">"+01:00"</span>;<br>
						<br>
						<span class="text-danger">CREATE DATABASE</span> `elegia` <span class="text-danger">DEFAULT</span> <span class="text-orange">CHARACTER</span> <span class="text-danger">SET</span> <span class="text-cyan">utf8</span> COLLATE <span class="text-cyan">utf8_general_ci</span>;<br>
						<span class="text-danger">USE</span> `elegia`;<br>
						<br>
						<span class="text-danger">CREATE TABLE</span> <span class="text-success">IF</span> <span class="text-info">NOT EXISTS</span> `benutzer` (<br>
						  &emsp;&emsp;`UID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span> <span class="text-info">AUTO_INCREMENT</span>,<br>
						  &emsp;&emsp;`email` <span class="text-warning">varchar</span>(128) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`pwd_hash` <span class="text-warning">varchar</span>(96) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`rolle` <span class="text-warning">enum</span>('Lieferant','Kunde') <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;PRIMARY KEY (`UID`),<br>
						  &emsp;&emsp;KEY `UID` (`UID`)<br>
						) <span class="text-indigo">ENGINE=InnoDB</span>  <span class="text-danger">DEFAULT</span> <span class="text-indigo">CHARSET=utf8</span> <span class="text-info">AUTO_INCREMENT</span> ;<br>
						<br>
						<span class="text-danger">CREATE TABLE</span> <span class="text-success">IF</span> <span class="text-info">NOT EXISTS</span> `k_bewertet_l` (<br>
						  &emsp;&emsp;`KID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`LID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`rating` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`description` <span class="text-warning">varchar</span>(128),<br>
						  &emsp;&emsp;KEY `LID` (`LID`),<br>
						  &emsp;&emsp;KEY `KID` (`KID`)<br>
						) <span class="text-indigo">ENGINE=InnoDB</span> <span class="text-danger">DEFAULT</span> <span class="text-indigo">CHARSET=utf8</span>;<br>
						<br>
						<span class="text-danger">CREATE TABLE</span> <span class="text-success">IF</span> <span class="text-info">NOT EXISTS</span> `kategorie` (<br>
						  &emsp;&emsp;`KaID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span> <span class="text-info">AUTO_INCREMENT</span>,<br>
						  &emsp;&emsp;`name` <span class="text-warning">varchar</span>(56) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`description` <span class="text-warning">varchar</span>(128) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;PRIMARY KEY (`KaID`),<br>
						  &emsp;&emsp;KEY `KaID` (`KaID`)<br>
						) <span class="text-indigo">ENGINE=InnoDB</span> <span class="text-danger">DEFAULT</span> <span class="text-indigo">CHARSET=utf8</span> <span class="text-info">AUTO_INCREMENT</span>=1 ;<br>
						<br>
						<span class="text-danger">CREATE TABLE</span> <span class="text-success">IF</span> <span class="text-info">NOT EXISTS</span> `korb` (<br>
						  &emsp;&emsp;`KorbID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span> <span class="text-info">AUTO_INCREMENT</span>,<br>
						  &emsp;&emsp;`created` <span class="text-warning">timestamp</span> <span class="text-danger">NOT NULL</span> <span class="text-danger">DEFAULT</span> CURRENT_<span class="text-warning">TIMESTAMP</span>,<br>
						  &emsp;&emsp;`KID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;PRIMARY KEY (`KorbID`),<br>
						  &emsp;&emsp;KEY `KorbID` (`KorbID`),<br>
						  &emsp;&emsp;KEY `KID` (`KID`)<br>
						) <span class="text-indigo">ENGINE=InnoDB</span> <span class="text-danger">DEFAULT</span> <span class="text-indigo">CHARSET=utf8</span> <span class="text-info">AUTO_INCREMENT</span>=1 ;<br>
						<br>
						<span class="text-danger">CREATE TABLE</span> <span class="text-success">IF</span> <span class="text-info">NOT EXISTS</span> `korb_lieferstatus` (<br>
						  &emsp;&emsp;`KorbID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`LID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`updated` <span class="text-warning">timestamp</span> <span class="text-danger">NOT NULL</span> <span class="text-danger">DEFAULT</span> CURRENT_<span class="text-warning">TIMESTAMP</span>,<br>
						  &emsp;&emsp;KEY `KorbID` (`KorbID`),<br>
						  &emsp;&emsp;KEY `LID` (`LID`)<br>
						) <span class="text-indigo">ENGINE=InnoDB</span> <span class="text-danger">DEFAULT</span> <span class="text-indigo">CHARSET=utf8</span>;<br>
						<br>
						<span class="text-danger">CREATE TABLE</span> <span class="text-success">IF</span> <span class="text-info">NOT EXISTS</span> `korb_ware` (<br>
						  &emsp;&emsp;`KorbID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`WID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`added` <span class="text-warning">timestamp</span> <span class="text-danger">NOT NULL</span> <span class="text-danger">DEFAULT</span> CURRENT_<span class="text-warning">TIMESTAMP</span>,<br>
						  &emsp;&emsp;KEY `KorbID` (`KorbID`),<br>
						  &emsp;&emsp;KEY `WID` (`WID`)<br>
						) <span class="text-indigo">ENGINE=InnoDB</span> <span class="text-danger">DEFAULT</span> <span class="text-indigo">CHARSET=utf8</span>;<br>
						<br>
						<span class="text-danger">CREATE TABLE</span> <span class="text-success">IF</span> <span class="text-info">NOT EXISTS</span> `kunde` (<br>
						  &emsp;&emsp;`KID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`Firmenname` <span class="text-warning">varchar</span>(128) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`Adresse` <span class="text-warning">varchar</span>(128) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;KEY `KID` (`KID`)<br>
						) <span class="text-indigo">ENGINE=InnoDB</span> <span class="text-danger">DEFAULT</span> <span class="text-indigo">CHARSET=utf8</span>;<br>
						<br>
						<span class="text-danger">CREATE TABLE</span> <span class="text-success">IF</span> <span class="text-info">NOT EXISTS</span> `lieferant` (<br>
						  &emsp;&emsp;`LID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`Name` <span class="text-warning">varchar</span>(128) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`Adresse` <span class="text-warning">varchar</span>(128) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;KEY `LID` (`LID`)<br>
						) <span class="text-indigo">ENGINE=InnoDB</span> <span class="text-danger">DEFAULT</span> <span class="text-indigo">CHARSET=utf8</span>;<br>
						<br>
						<span class="text-danger">CREATE TABLE</span> <span class="text-success">IF</span> <span class="text-info">NOT EXISTS</span> `lieferstatus` (<br>
						  &emsp;&emsp;`SID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span> <span class="text-info">AUTO_INCREMENT</span>,<br>
						  &emsp;&emsp;`Name` <span class="text-warning">varchar</span>(56) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`description` <span class="text-warning">int</span>(128) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;PRIMARY KEY (`SID`),<br>
						  &emsp;&emsp;KEY `SID` (`SID`)<br>
						) <span class="text-indigo">ENGINE=InnoDB</span> <span class="text-danger">DEFAULT</span> <span class="text-indigo">CHARSET=utf8</span> <span class="text-info">AUTO_INCREMENT</span>=1 ;<br>
						<br>
						<span class="text-danger">CREATE TABLE</span> <span class="text-success">IF</span> <span class="text-info">NOT EXISTS</span> `payment_method` (<br>
						  &emsp;&emsp;`PayID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span> <span class="text-info">AUTO_INCREMENT</span>,<br>
						  &emsp;&emsp;`name` <span class="text-warning">varchar</span>(56) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;PRIMARY KEY (`PayID`),<br>
						  &emsp;&emsp;KEY `PayID` (`PayID`)<br>
						) <span class="text-indigo">ENGINE=InnoDB</span> <span class="text-danger">DEFAULT</span> <span class="text-indigo">CHARSET=utf8</span> <span class="text-info">AUTO_INCREMENT</span>=1 ;<br>
						<br>
						<span class="text-danger">CREATE TABLE</span> <span class="text-success">IF</span> <span class="text-info">NOT EXISTS</span> `rechnung` (<br>
						  &emsp;&emsp;`ReID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span> <span class="text-info">AUTO_INCREMENT</span>,<br>
						  &emsp;&emsp;`KorbID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`sum` float <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`created` <span class="text-warning">timestamp</span> <span class="text-danger">NOT NULL</span> <span class="text-danger">DEFAULT</span> CURRENT_<span class="text-warning">TIMESTAMP</span>,<br>
						  &emsp;&emsp;PRIMARY KEY (`ReID`),<br>
						  &emsp;&emsp;KEY `ReID` (`ReID`),<br>
						  &emsp;&emsp;KEY `KorbID` (`KorbID`)<br>
						) <span class="text-indigo">ENGINE=InnoDB</span> <span class="text-danger">DEFAULT</span> <span class="text-indigo">CHARSET=utf8</span> <span class="text-info">AUTO_INCREMENT</span>=1 ;<br>
						<br>
						<span class="text-danger">CREATE TABLE</span> <span class="text-success">IF</span> <span class="text-info">NOT EXISTS</span> `rechnung_payment` (<br>
						  &emsp;&emsp;`ReID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`PayID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`status` <span class="text-warning">enum</span>('Wird bearbeitet','Fehlgeschlagen','Erfolgreich','') <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;KEY `ReID` (`ReID`),<br>
						  &emsp;&emsp;KEY `PayID` (`PayID`)<br>
						) <span class="text-indigo">ENGINE=InnoDB</span> <span class="text-danger">DEFAULT</span> <span class="text-indigo">CHARSET=utf8</span>;<br>
						<br>
						<span class="text-danger">CREATE TABLE</span> <span class="text-success">IF</span> <span class="text-info">NOT EXISTS</span> `ware` (<br>
						  &emsp;&emsp;`WID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span> <span class="text-info">AUTO_INCREMENT</span>,<br>
						  &emsp;&emsp;`KaID` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`name` <span class="text-warning">varchar</span>(128) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`price` double <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;`amount` <span class="text-warning">int</span>(11) <span class="text-danger">NOT NULL</span>,<br>
						  &emsp;&emsp;PRIMARY KEY (`WID`),<br>
						  &emsp;&emsp;KEY `WID` (`WID`),<br>
						  &emsp;&emsp;KEY `KaID` (`KaID`)<br>
						) <span class="text-indigo">ENGINE=InnoDB</span> <span class="text-danger">DEFAULT</span> <span class="text-indigo">CHARSET=utf8</span> <span class="text-info">AUTO_INCREMENT</span>=1 ;<br>
						<br>
						<span class="text-danger">ALTER TABLE</span> `k_bewertet_l`<br>
						  &emsp;&emsp;ADD <span class="text-orange">CONSTRAINT</span> `k_bewertet_l_ibfk_2` <span class="text-indigo">FOREIGN KEY</span> (`KID`) <span class="text-cyan">REFERENCES</span> `benutzer` (`UID`),<br>
						  &emsp;&emsp;ADD <span class="text-orange">CONSTRAINT</span> `k_bewertet_l_ibfk_1` <span class="text-indigo">FOREIGN KEY</span> (`LID`) <span class="text-cyan">REFERENCES</span> `benutzer` (`UID`);<br>
						  <br>
						<span class="text-danger">ALTER TABLE</span> `korb`<br>
						  &emsp;&emsp;ADD <span class="text-orange">CONSTRAINT</span> `korb_ibfk_1` <span class="text-indigo">FOREIGN KEY</span> (`KID`) <span class="text-cyan">REFERENCES</span> `kunde` (`KID`);<br>
						  <br>
						<span class="text-danger">ALTER TABLE</span> `korb_lieferstatus`<br>
						  &emsp;&emsp;ADD <span class="text-orange">CONSTRAINT</span> `korb_lieferstatus_ibfk_2` <span class="text-indigo">FOREIGN KEY</span> (`LID`) <span class="text-cyan">REFERENCES</span> `lieferstatus` (`SID`),<br>
						  &emsp;&emsp;ADD <span class="text-orange">CONSTRAINT</span> `korb_lieferstatus_ibfk_1` <span class="text-indigo">FOREIGN KEY</span> (`KorbID`) <span class="text-cyan">REFERENCES</span> `korb` (`KorbID`);<br>
						  <br>
						<span class="text-danger">ALTER TABLE</span> `korb_ware`<br>
						  &emsp;&emsp;ADD <span class="text-orange">CONSTRAINT</span> `korb_ware_ibfk_2` <span class="text-indigo">FOREIGN KEY</span> (`WID`) <span class="text-cyan">REFERENCES</span> `ware` (`WID`),<br>
						  &emsp;&emsp;ADD <span class="text-orange">CONSTRAINT</span> `korb_ware_ibfk_1` <span class="text-indigo">FOREIGN KEY</span> (`KorbID`) <span class="text-cyan">REFERENCES</span> `korb` (`KorbID`);<br>
						  <br>
						<span class="text-danger">ALTER TABLE</span> `kunde`<br>
						  &emsp;&emsp;ADD <span class="text-orange">CONSTRAINT</span> `kunde_ibfk_1` <span class="text-indigo">FOREIGN KEY</span> (`KID`) <span class="text-cyan">REFERENCES</span> `benutzer` (`UID`);<br>
						  <br>
						<span class="text-danger">ALTER TABLE</span> `lieferant`<br>
						  &emsp;&emsp;ADD <span class="text-orange">CONSTRAINT</span> `lieferant_ibfk_1` <span class="text-indigo">FOREIGN KEY</span> (`LID`) <span class="text-cyan">REFERENCES</span> `benutzer` (`UID`);<br>
						  <br>
						<span class="text-danger">ALTER TABLE</span> `rechnung`<br>
						  &emsp;&emsp;ADD <span class="text-orange">CONSTRAINT</span> `rechnung_ibfk_1` <span class="text-indigo">FOREIGN KEY</span> (`KorbID`) <span class="text-cyan">REFERENCES</span> `korb` (`KorbID`);<br>
						  <br>
						<span class="text-danger">ALTER TABLE</span> `rechnung_payment`<br>
						  &emsp;&emsp;ADD <span class="text-orange">CONSTRAINT</span> `rechnung_payment_ibfk_2` <span class="text-indigo">FOREIGN KEY</span> (`PayID`) <span class="text-cyan">REFERENCES</span> `payment_method` (`PayID`),<br>
						  &emsp;&emsp;ADD <span class="text-orange">CONSTRAINT</span> `rechnung_payment_ibfk_1` <span class="text-indigo">FOREIGN KEY</span> (`ReID`) <span class="text-cyan">REFERENCES</span> `rechnung` (`ReID`);<br>
						  <br>
						<span class="text-danger">ALTER TABLE</span> `ware`<br>
						  &emsp;&emsp;ADD <span class="text-orange">CONSTRAINT</span> `ware_ibfk_1` <span class="text-indigo">FOREIGN KEY</span> (`KaID`) <span class="text-cyan">REFERENCES</span> `kategorie` (`KaID`);<br>
					</div>
				</div>
		</div>
		<div class="container-fluid custom-block bg-white" style="border-bottom:1px gainsboro solid">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1 style="color: #009688; border-bottom: 1px #009688 solid; padding-bottom: 3px;">Logisches Design</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="mxgraph mx-auto" style="max-width:100%;border:1px solid transparent;" data-mxgraph="{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;resize&quot;:true,&quot;toolbar&quot;:&quot;zoom layers lightbox&quot;,&quot;edit&quot;:&quot;_blank&quot;,&quot;xml&quot;:&quot;&lt;mxfile userAgent=\&quot;Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36\&quot; version=\&quot;9.4.6\&quot; editor=\&quot;www.draw.io\&quot; type=\&quot;device\&quot;&gt;&lt;diagram id=\&quot;12b2de2a-7881-592d-15a3-99b137766f5e\&quot; name=\&quot;Page-1\&quot;&gt;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&lt;/diagram&gt;&lt;/mxfile&gt;&quot;}"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid custom-block bg-light" style="border-top:1px gainsboro solid">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1>Welche Technologien werden verwendet?</h1>
					</div>
				</div>
				<div class="row text-center margin-top-15">
					<div class="col-md-6">
						<i class="fab fa-laravel fa-10x text-secondary"></i>
						<span class="custom-text margin-top-15">
							Als Back-End Framework haben wir uns für «Laravel» entschieden, da dieser Framework sowohl gute Feedback und  große Community hat,  als auch  eine ausführliches Dokumentation.
						</span>
					</div>
					<div class="col-md-6">
						<i class="fab fa-js-square fa-10x text-secondary"></i>
						<span class="custom-text margin-top-15">
							JavaScript und darauf basierte Web-Frameworks wie <b>jQuery</b> und ReactJS für eine saubere und agile Entwicklung. JQuery wird auch für das responsive Design verwendet. Alle asynchronen Aufrufen sind auf JavaScript basiert.
						</span>
					</div>
					<div class="col-md-6">
						<i class="fas fa-database fa-10x text-secondary"></i>
						<span class="custom-text margin-top-15">
							Die Datenhaltung von Entitaeten und ihren Beziehungen wird mit <b>MySQL</b> gestaltet. Alles, was nicht in die Tabellen rein passt, wird mit Hilfe von NoSQL-basierten DB (z.B. MongoDB) entwickelt.
						</span>
					</div>
					<div class="col-md-6">
						<i class="fab fa-css3 fa-10x text-secondary"></i>
						<span class="custom-text margin-top-15">
							Das Styling wird mit Hilfe von CSS und darauf basierten Framework <b>Bootstrap</b> entwickelt. Dies garantiert eine getestete und browserübergre<span class="text-success">if</ende Darstellung der Webseite.
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid custom-block bg-white" style="border-top:1px gainsboro solid">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1>Welche Rollen gibt es?</h1>
					</div>
				</div>
				<div class="row rollen">
					<div class="col-md-4">
						<span class="custom-text text-center text-secondary">
							<h3>Lieferanten (Lebensmittel)</h3>
						</span>
						<?= $this->Html->image('about/lieferant.png', ['alt' => 'CakePHP', 'class' => 'img-fluid']); ?>
						
					</div>
					<div class="col-md-4">
						<span class="custom-text text-center text-secondary">
							<h3>Business Model/ Logik</h3>
						</span>
						<?= $this->Html->image('about/buslogik.png', ['alt' => 'CakePHP', 'class' => 'img-fluid']); ?>
					</div>
					<div class="col-md-4">
						<span class="custom-text text-center text-secondary">
							<h3>Kunden (KMU)</h3>
						</span>
						<?= $this->Html->image('about/firma.png', ['alt' => 'CakePHP', 'class' => 'img-fluid']); ?>
					</div>
				</div>
			</div>
		</div>
		
	</main>
	<footer class="container-fluid bg-dark text-light">
		<div class="container-fluid text-left">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12 text-secondary">
							<h1 style="margin-left: 40px">Team</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-left" style="font-weight: 100">
							<ul>
								<li>
									<a class="text-white" href="https://github.com/rodchenk/">Mykhailo Rodchenkov</a>
								</li>
								<li>
									<a class="text-white" href="#">Nikita Ivachshenko</a>
								</li>
								<li>
									<a class="text-white" href="#">Thi Ngoc Thi Nguyen</a>
								</li>
								<li>
									<a class="text-white" href="#">Siti Rizki Adhaila Ilyas</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12 text-secondary">
							<h1 style="margin-left: 40px">Links</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<ul class="text-left" style="font-weight: 100">
								<li>
									<a class="text-white" href="#">Terms</a>
								</li>
								<li>
									<a class="text-white" href="#">Privacy</a>
								</li>
								<li>
									<a class="text-white" href="#">Contact</a>
								</li>
								<li>
									<a class="text-white" href="#">Blog</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12 text-secondary">
							<h1>Social</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<a class="text-white" href="#"><i class="fab fa-2x fa-facebook-square" style="padding: 4px"></i></a>
						
							<a class="text-white" href="#"><i class="fab fa-2x fa-github-square" style="padding: 4px"></i></a>
						
							<a class="text-white" href="#"><i class="fab fa-2x fa-twitter-square" style="padding: 4px"></i></a>
								
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 margin-top-15">
							<b class="text-secondary">Author: </b> <span style="font-weight: 100">rodchenk@th-brandenburg.de</span>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="row">
						<div class="col-md-12">
							<?= $this->Html->image('about/logologo.png', ['alt' => 'CakePHP', 'class' => 'img-fluid']); ?>
						</div>
					</div>
					<div class="row" style="margin-top: 15px">
						<div class="col-md-12">
							<?= $this->Html->image('about/thb.png', ['alt' => 'CakePHP', 'class' => 'img-fluid', 'style' => ['filter:brightness(100)']]); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="https://www.draw.io/js/viewer.min.js"></script>
</body>
</html>

<html>
<?php include("headmeta.php"); ?>

<body>
	<?php include("header.php"); ?>
	<div id="content">
		<div id="content-inner">
			<h1>Nya Lova Herren</h1>
			<p>Musiken är en guds gåva som alltid har haft en central roll i gudstjänst- och andaktsliv. Från Mose
				till kung David, från Sakarias och Marias lovsånger till reformationen och Luther, från Lina Sandell
				till Hillsong – evangelium ska inte bara predikas och begrundas utan också väcka lovsång och
				tillbedjan.
			</p>
			<p>
				Nu ges Lova Herren ut i en ny, reviderad, upplaga. Sånger från tidigare upplagor har uppdaterats
				språkligt och många nya sånger har lagts till. Sammanlagt finns det 625 nya och gamla sånger i
				denna upplaga. Målet har varit att bevara och förnya den sångskatt som finns i Lova Herren. Den
				grafiska utformningen är helt ny och notbilden till varje sång finns med i sång
				med en ackordanalys. Dessutom finns, förutom vanliga vers-
				och författarregister, ett kyrkoårsregister med förslag på sånger som passar

				till kyrkoårets olika gudstjänster. Sångboken kommer även finnas tillgänglig som mobilapp.</p>

			<p>
				Sången har varit en viktig del av ELMs identitet ända från början, och
				sångböckerna har varit identitetsbärande. Vår mediekonsumtion har i hög utsträckning förflyttats till våra telefoner och därför kommer Lova Herren 2020 också ut som en mobilapp.
				Lova Herren 2020 är en sångbok med gamla och nya sånger som förkunnar Kristus och vägleder oss genom livet. Lova Herren passar både för personlig andakt som för
				bibelstudiegruppen och gudstjänstgemenskapen.</p>

			<h2>Prisuppgifter</h2>
			<div class="prices">
				<div class="row">
					<strong>
						Sångbok Standard
					</strong>
					<strong>
						290 kr
					</strong>
				</div>
				<p>Kan bytas mot Sångbok Skinnband mot ett tillägg på 50 kr/bok.</p>
				<div class="row">
					<strong>
						Notbok
					</strong>
					<strong>
						490 kr
					</strong>
				</div>
				<div class="row">
					<strong>
						Mobilapp
					</strong>
					<strong>
						89 kr
					</strong>
				</div>
				<p>Kan köpas i Google Play och i App Store.</p>
				<div class="row">
					<strong>
						Lilla familjepaketet
					</strong>
					<strong>
						1 590 kr
					</strong>
				</div>
				<p>5 st Sångbok Standard, 1 st Notbok</p>
				<div class="row">
					<strong>
						Stora familjepaktet
					</strong>
					<strong>
						2 190 kr
					</strong>
				</div>
				<p>7 st Sångbok Standard, 2 st Sångbok Skinnband, 1 st Notbok</p>
				<div class="row">
					<strong>
						Lilla föreningspaketet
					</strong>
					<strong>
						3 700 kr
					</strong>
				</div>
				<p>20 st Sångbok Standard,
					1 st Notbok, filer för väggpublicering</p>
				<div class="row">
					<strong>
						Stora föreningspaketet
					</strong>
					<strong>
						8 500 kr
					</strong>
				</div>
				<p>50 st Sångbok Standard,
					2 st Notbok, filer för väggpublicering</p>
			</div>

			<h2>Förbeställning</h2>
			<p>Lova Herren ges ut av <a href="http://www.bvforlag.se">BV-förlag</a> och det går att förhandsbeställa från förlaget i formuläret nedan. leverans
				beräknas till första veckan i december. Betalning
				sker
				via faktura i samband med leverans. Frakt är inkluderat när du förhandsbeställer.
			</p>

			<form action="order.php" method="post">
				<p>
					<label for="name">
						Namn/Förening/Församling
						<input type="text" id="name" name="name" required>
					</label>
				</p>
				<p>
					<label for="adress">
						Adress
						<input type="text" id="adress" name="adress" autocomplete="shipping street-address" required>
					</label>
				</p>
				<p>
					<label for="adress">
						Postkod
						<input type="text" id="adress" name="adress" autocomplete="shipping postal-code" required>
					</label>
				</p>
				<p>
					<label for="adress">
						Postort
						<input type="text" id="adress" name="adress" autocomplete="shipping locality" required>
					</label>
				</p>
				<p>
					<label for="phone">
						Telefon
						<input type="text" id="phone" name="phone" autocomplete="tel" required>
					</label>
				</p>
				<p>
					<label for="email">
						Mejladress
						<input type="email" id="email" name="email" autocomplete="email" required>
					</label>
				</p>
				<p>
					<label>Jag vill beställa</label>
					<div class="row">
						<input type="number" id="lillafamiljepaketet" name="lillafamiljepaketet" value="0" required>
						<label for="lillafamiljepaketet">
							Lilla familjepaketet
						</label>
					</div>
					<div class="row">
						<input type="number" id="storafamiljepaketet" name="storafamiljepaketet" value="0" required>
						<label for="storafamiljepaketet">
							Stora familjepaketet
						</label>
					</div>
					<div class="row">
						<input type="number" id="lillaforeningspaketet" name="lillaforeningspaketet" value="0" required>
						<label for="lillaforeningspaketet">
							Lilla föreningspaketet
						</label>
					</div>
					<div class="row">
						<input type="number" id="storaforeningspaketet" name="storaforeningspaketet" value="0" required>
						<label for="storaforeningspaketet">
							Stora föreningspaketet
						</label>
					</div>
					<div class="row">
						<input type="number" id="sangbok" name="sangbok" value="0" required>
						<label for="sangbok">
							Sångbok standard
						</label>
					</div>
					<div class="row">
						<input type="number" id="sangboklader" name="sangboklader" value="0" required>
						<label for="sangboklader">
							Sångbok läder
						</label>
					</div>
					<div class="row">
						<input type="number" id="notbok" name="notbok" value="0" required>
						<label for="notbok">
							Notbok
						</label>
					</div>
					<p> <button type="submit">Förhandsbeställ</button> </p>
					<p><small>Passa gärna på att läsa våra <a href="https://www.bvforlag.se/villkor-info.html">allmänna villkor</a> och <a href="/pp.php">personuppgiftspolicy</a>.</small>

			</form>
		</div>
	</div>
</body>

</html>
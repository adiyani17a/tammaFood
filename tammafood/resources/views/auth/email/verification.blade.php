<html>
	<head>
		<style type="text/css">

		</style>
	</head>
	<body>
		<table width="100%">
			<tr>
				<td width="60%" style="padding: 10px; border-bottom: 2px solid #aaa;">
					<span style="font-size: 26px; color: #1182a2; font-weight: 500;">DBoard</span>
				</td>
				<td style="padding: 10px; border-bottom: 2px solid #aaa; text-align: right">
					<span style="color: #888">{{ date('m-d-Y') }}</span>
				</td>
			</tr>

			<tr>
				<td style="padding: 5px; color: #555;">
					Selamat bergabung di <span style="color: #1182a2; font-weight: 500;">DBoard</span>. Berikut adalah identitas diri yang telah berhasil anda daftarkan di <span style="color: #1182a2; font-weight: 500;">DBoard</span>. 
				</td>
				<td></td>
			</tr>

			<tr>
				<td style="padding: 5px 10px 15px 10px;">
					<table style="color: #333;" width="80%">
						<tr bgcolor="">
							<td width="40%" style="padding: 3px;"> Nama</td>
							<td width="3%" style="padding: 3px;"> :</td>
							<td style="padding: 3px; font-weight: bold;">  {{ $member->m_name }}</td>
						</tr>

						<tr bgcolor="">
							<td style="padding: 3px;"> Username</td>
							<td style="padding: 3px;"> :</td>
							<td style="padding: 3px; font-weight: bold;">  {{ $member->m_username }}</td>
						</tr>

						<tr bgcolor="">
							<td style="padding: 3px;"> Tanggal Lahir</td>
							<td style="padding: 3px;"> :</td>
							<td style="padding: 3px; font-weight: bold;">  {{ date('d-m-Y', strtotime($member->m_birth_tgl)) }}</td>
						</tr>

						<tr bgcolor="">
							<td style="padding: 3px;"> Alamat</td>
							<td style="padding: 3px;"> :</td>
							<td style="padding: 3px; font-weight: bold;">  {{ $member->m_addr }}</td>
						</tr>
					</table>
				</td>
			</tr>

			<tr>
				<td style="padding: 5px; color: #555;">
					Untuk Bisa Menggunakan <span style="color: #1182a2; font-weight: 500;">DBoard</span>. Harap mengkonfirmasi email Anda terlebih dahulu dengan cara klik link dibawah ini. 
				</td>
				<td></td>
			</tr>

			<tr>
				<td style="padding: 5px 10px 30px 40px;">
					<a href="{{ url('/').'/verify-email/'.$title }}">{{ url('/').'/verify-email/'.$title }}</a>					
				</td>
				<td></td>
			</tr>

			<tr style="text-align: right;">
				<td style="padding: 5px 80px 40px 20px;">
					Terima Kasih			
				</td>
				<td></td>
			</tr>

			<tr style="text-align: right;">
				<td style="padding: 5px 80px 10px 24px;border-bottom: 2px solid #aaa;">
					Tim DBoard			
				</td>
				<td style="border-bottom: 2px solid #aaa;"></td>
			</tr>

			<tr>
				<td style="padding: 5px 80px 10px 24px;border-bottom: 2px solid #aaa;">
					<span style="font-size: 12px; color: #999">* Ini adalah email yang bersifat no-reply. Sehingga balasan dalam bentuk apapun dari anda tidak akan kami proses.</span>
				</td>
				<td style="border-bottom: 2px solid #aaa;"></td>
			</tr>
		</table>
	</body>
</html>
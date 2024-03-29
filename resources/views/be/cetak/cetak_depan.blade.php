<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
	<style>
		body{
			font-family: Arial, Helvetica, sans-serif;
			font-size: 14px;
		}
		.page-break {
			page-break-after: always;
			page-break-inside: avoid;
		}
		.atas {
			font-size: 14px;
			font-family: Arial, Helvetica, sans-serif;
		}
		.bawah {
			font-size: 14px;
			font-family: Arial, Helvetica, sans-serif;
		}
		.dalam{
			/* text-transform: uppercase; */
		}
		/* .tepi { border: 1px solid; 
		} */
	</style>
		@foreach ($peserta as $item)
		<div class="print">
			<table 
			style="height: 180px; width: 900px;margin-left:138px;margin-top:287px"
			class="dalam">
				<tbody>
				<tr class="atas">
                    <td class="atas" style="width: 170px; height: 23px;">&nbsp;</td>
                    <td class="atas" style="width: 11px; height: 23px;"></td>
                    <td class="atas" style="width: 750px; height: 23px;">{{ $item->nama }}</td>
                    <td class="atas" style="width: 52px; height: 23px; ">&nbsp;</td>
				</tr>
				<tr class="atas">
                    <td class="atas" style="width: 170px; height: 23px;"></td>
                    <td class="atas" style="width: 11px; height: 23px;"></td>
                    <td class="atas" style="width: 750px; height: 23px; text-transform: uppercase" >

						{{ $item->alamat }} {{$item->kota}}
						
					
					</td>
                    <td class="atas" style="width: 52px; height: 23px;">&nbsp;</td>
				</tr>
				<tr class="atas">
                    <td class="atas" style="width: 170px; height: 23px; "></td>
                    <td class="atas" style="width: 11px; height: 23px;"></td><?php date_default_timezone_set('Asia/Jakarta'); $date=$item->tgllahir;?>
                    <td class="atas" style="width: 750px; height: 23px; text-transform: uppercase" >
						{{ $item->tmplahir }}, {{ Carbon\Carbon::parse($date)->isoFormat('D MMMM Y') }}&nbsp;	
					</td>
                    <td class="atas" style="width: 52px; height: 23px;">&nbsp;</td>
				</tr>
				
				<tr class="atas">
                    <td class="atas" style="width: 170px; height: 23px;"></td>
                    <td class="atas" style="width: 11px; height: 23px;"></td>
                    <td class="atas" style="width: 750px; height: 23px; text-transform: uppercase" >{{ $item->kriteria }}</td>
                    <td class="atas" style="width: 52px; height: 23px;">&nbsp;</td>
				</tr>
				<tr class="atas">
                    <td class="atas" style="width: 170px; height: 37px;">&nbsp;</td>
                    <td class="atas" style="width: 11px; height: 37px;">&nbsp;</td>
                    <td class="atas" style="width: 750px; height: 37px;">&nbsp;</td>
                    <td class="atas" style="width: 52px; height: 37px;">&nbsp;</td>
				</tr>
				</tbody>
			</table>

			<table 
		
			style="margin-left:169px; margin-top: 15px"
			>
				<tbody>
				<tr style="height: 27px;"><?php $tahun = date('Y')?>
					{{-- kosong --}}
					<td class="bawah" style="width: 210px; height: 27px;  "><small> </small></td>
					{{-- kosong --}}
					<td class="bawah" style="width: 156px; height: 27px;  ">&nbsp;</td>
					{{-- tanggal pelaksanaan --}}
					<?php $lokasicetak = strtolower($item->pelatihan->cabang->kota)?>
					<td class="atas" style="width: 241px; height: 27px; text-transform: lowercase;text-transform: capitalize;  ">Surabaya, {{ Carbon\Carbon::parse($item->pelatihan->tanggal)->isoFormat('D MMMM Y') }}</td>
				</tr>
				<tr style="height: 78px;">
					{{-- QR --}}
					<td class="bawah" style="width: 210px; height: 70px; ">
						{{-- <div class="tepi" style="width: 70px; padding: 2px; ">
							<img src="images/{{ $item->slug }}.png" alt="" width="70px" height="70px">
						</div> --}}
					</td>
					{{-- kosong --}}
					<td class="bawah" style="width: 156px; height: 70px; ">&nbsp;</td>
					{{-- kosong --}}
					<td class="bawah" style="width: 241px; height: 70px; ">
						
					</td>
				</tr>
				<tr style="height: 5px;">
					{{-- no syahadah --}}
					<td class="atas" style="width: 210px; height: 5px; font-size: 13px">No. Syahadah : &nbsp;{{ $item->pelatihan_id }}/{{ $tahun }}/{{ $item->id }}</td>
					{{-- kosong --}}
					<td class="bawah" style="width: 156px; height: 5px;">&nbsp;</td>
					{{-- direktur --}}
					<td class="atas" style="width: 241px; height: 5px;"> 
						<u>
							{{$item->pelatihan->cabang->nmkepala}}
						</u>
					</td>
				</tr>
				<tr style="height: 4px;">
					{{-- kosong --}}
					<td  style="width: 210px; height: 4px;  ">&nbsp;</td>
					{{-- kosong --}}
					<td  style="width: 156px; height: 4px;  ">&nbsp;</td>
					{{-- kepala cabang mana --}}
					<td style="width: 241px; height: 2px; text-transform: capitalize; font-size: 13px"> 
						@if ($lokasicetak == 'surabaya')
                        	Direktur Eksekutif
						@else
							Kacab. {{$lokasicetak}}
						@endif 
					</td>
				</tr>
				</tbody>
			</table>
		</div>
		@endforeach
</body>
</html>	



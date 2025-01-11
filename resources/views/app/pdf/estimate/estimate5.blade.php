<!DOCTYPE html>
<html>

<head>
    <title>@lang('pdf_estimate_label') - {{ $estimate->estimate_number }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style type="text/css">
        /* -- Base -- */
        body {
            font-family: "DejaVu Sans";
        }

        html {
	margin-bottom: 0px;
	padding-left: 50px;
	padding-right:30px;
	margin-top: 50px;
	margin-left: 40px;
	margin-right: 30px;
        }

        table {
            border-collapse: collapse;
        }

        hr {
	color: rgba(0, 0, 0, 0.2);
	border: 0.5px solid #EAF1FB;
        }

        /* -- Header -- */

        .header-container {
	margin-top: -30px;
	padding: 0px;
	width: auto;
        }
		.footer-container {
	margin-bottom: -30px;
	width: 100%;
	padding: 0px;
        }

        .header-logo {

            text-transform: capitalize;
            color: #817AE3;
            padding-top: 0px;
        }
		.header-section-left {
	width: 50%;
	float: left;
        }
		.header-section-right {
	width: 50%;
	float: right;
        }

        /* -- Company Address -- */

        .company-address-container {
	width: auto;
	/* text-transform: capitalize; */
	padding-right: 0px;
	margin-bottom: 2px;
	float: right;
        }
		.company-info {
	width: 100%;
	padding-right: 0px;
	margin-bottom: 2px;
	text-align: right;
	margin-right: 0px;
        }

        .company-address {
	margin-top: 12px;
	font-size: 11px;
	line-height: 14px;
	color: #595959;            /*word-wrap: break-word; */
        }

        /* -- Content Wrapper -- */

        .wrapper {
	display: block;
	padding-top: 0px;
	padding-bottom: 20px;
        }

        .customer-address-container {
            display: block;
            float: left;
            width: 45%;
            padding: 10px 0 0 30px;
        }

        /* -- Shipping -- */

        .shipping-address-container {
            float: right;
            display: block;
        }

        .shipping-address-container--left {
            float: left;
            display: block;
            padding-left: 0;
        }

        .shipping-address-label {
	padding-top: 5px;
	font-size: 11px;
	line-height: 16px;
	margin-bottom: 0px;
	color: #55547A;
        }

        .shipping-address-name {
	padding: 0px;
	font-size: 12px;
	line-height: 18px;
	margin: 0px;
	max-width: 160px;
        }

        .shipping-address {
	font-size: 12px;
	line-height: 16px;
	color: #55547A;
	width: 160px;
	word-wrap: break-word;
        }

        /* -- Billing -- */

        .billing-address-container {
            display: block;
            float: left;
        }

        .billing-address-label {
	font-size: 11px;
	line-height: 16px;
	text-align: left;
	color: #55547A;
        }

        .billing-address-name {
            padding: 0px;
            font-size: 15px;
            line-height: 22px;
            margin: 0px;
            max-width: 160px;
        }

        .billing-address {
	font-size: 12px;
	line-height: 16px;
	color: #55547A;
	width: 160px;
	word-wrap: break-word;
        }

        /* -- Estimate Details -- */

        .estimate-details-container {
            display: block;
            float: right;
            padding: 10px 30px 0 0;
        }

        .attribute-label {
	font-size: 11px;
	line-height: 16px;
	text-align: left;
	color: #55547A
        }

        .attribute-value {
	font-size: 11px;
	line-height: 16px;
	text-align: right;
        }

        /* -- Items Table -- */

        .items-table {
            padding: 30px 30px 10px 30px;
            page-break-before: avoid;
            page-break-after: auto;
        }

        .items-table hr {
            height: 0.1px;
            margin: 0 30px;
        }

        .item-table-heading {
            font-size: 13.5;
            text-align: center;
            color: rgba(0, 0, 0, 0.85);
            padding: 5px;
            padding-bottom: 10px;
        }

        tr.item-table-heading-row th {
            border-bottom: 0.620315px solid #E8E8E8;
            font-size: 12px;
            line-height: 18px;
        }

        .item-table-heading-row {
            margin-bottom: 10px;
        }

        tr.item-row td {
            font-size: 12px;
            line-height: 18px;
        }

        .item-cell {
            font-size: 13;
            color: #040405;
            text-align: center;
            padding: 5px;
            padding-top: 10px;
            border-color: #d9d9d9;
        }

        .item-description {
            color: #595959;
            font-size: 9px;
            line-height: 12px;
        }

        .item-cell-table-hr {
            margin: 0 30px 0 30px;
        }

        /* -- Total Display Table -- */

        .total-display-container {
            padding: 0 25px;
        }

        .total-display-table {
            box-sizing: border-box;
            page-break-inside: avoid;
            page-break-before: auto;
            page-break-after: auto;
            margin-top: 20px;
            float: right;
            width: auto;

        }

        .total-table-attribute-label {
            font-size: 12px;
            color: #55547A;
            text-align: left;
            padding-left: 10px;
        }

        .total-table-attribute-value {
            font-weight: bold;
            text-align: right;
            font-size: 12px;
            color: #040405;
            padding-right: 10px;
            padding-top: 2px;
            padding-bottom: 2px;
        }

        .total-border-left {
            border: 1px solid #E8E8E8 !important;
            border-right: 0px !important;
            padding-top: 0px;
            padding: 8px !important;
        }

        .total-border-right {
            border: 1px solid #E8E8E8 !important;
            border-left: 0px !important;
            padding-top: 0px;
            padding: 8px !important;
        }

        /* -- Notes -- */

        .notes {
	font-size: 10px;
	color: #595959;
	margin-top: 80px;
	margin-left: 30px;
	margin-right: 30px;
	width: auto;
	text-align: justify;
	page-break-inside: avoid;
        }

        .notes-label {
	font-size: 14px;
	line-height: 22px;
	letter-spacing: 0.05em;
	color: #5851DB;
	width: 108px;
	white-space: nowrap;
	height: 18px;
	padding-bottom: 10px;
        }

        /* -- Helpers -- */

        .text-primary {
            color: #5851DB;
        }

        .text-center {
            text-align: center
        }

        table .text-left {
            text-align: left;
        }

        table .text-right {
            text-align: right;
        }

        .border-0 {
            border: none;
        }

        .py-2 {
            padding-top: 2px;
            padding-bottom: 2px;
        }

        .py-8 {
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .py-3 {
            padding: 3px 0;
        }

        .pr-20 {
            padding-right: 20px;
        }

        .pr-10 {
            padding-right: 10px;
        }

        .pl-20 {
            padding-left: 20px;
        }

        .pl-10 {
            padding-left: 10px;
        }

        .pl-0 {
            padding-left: 0;
        }
		footer {
	position: fixed;
	bottom: 0;
	height: 80px;
}

        .footer-wrapper {
            padding: 0 30px;
        }
        .footer-wrapper .footer-label {
            display: inline-block;
            width: 50px;
            line-height: 14px;
            height: 14px;
            text-aling: center;
        }
        .footer-table {
            border-top: 0.620315px solid #E8E8E8;
            color: #595959;
            font-size: 10px;
            line-height: 14px;
        }
        .footer-table a {
            color: #595959;
            text-decoration: none;
        }

    </style>
</head>

<body>
<header>
<div class="header-container">
    <table width="100%">
        <tr>
            <td class="header-section-left">
                @if ($logo)
                        <img class="header-logo" style="height: 130px;" src="{{ $logo }}" alt="Company Logo">
                    @else
                        <h1 class="header-logo"> {{ $estimate->customer->company->name }} </h1>
                    @endif
                </td>
            <td class="header-section-right company-address-container">
                <div class="company-info">
                        <p class="company-address">
                        	<strong>LURCONIS d.o.o.</strong> <br>
                            Antuna Vancaša 5, <br>
                            10450 Jastrebarsko <br>
                            OIB: 02928621513 <br>
                            Email: info@lurconis.hr <br> 
                            Web: www.lurconis.hr
                        </p>
                </div>
            </td>
        </tr>
    </table>
</div>
<hr class="header-bottom-divider">
</header>


<div class="wrapper">
        <div class="main-content">
            <div class="customer-address-container">
                <div class="billing-address-container billing-address">
                    @if ($billing_address)
                    	Kupac
                        {!! $billing_address !!}
                        
                    @endif
                </div>

                <div @if ($estimate->customer->billingaddress) class="shipping-address-container shipping-address" @else class="shipping-address-container--left shipping-address" @endif>
                    @if ($shipping_address)
                        Mjesto isporuke
                        {!! $shipping_address !!}
                    @endif
                </div>

                <div style="clear: both;"></div>
            </div>

            <div class="estimate-details-container">
                <table>
                    <tr>
                        <td class="attribute-label"><h2>Ponuda br.</h2></td>
                        <td class="attribute-value"><h2> &nbsp;{{ $estimate->estimate_number }}</h2></td>
                    </tr>
                    <tr>
                        <td class="attribute-label">Ponuda izrađena</td>
                        <td class="attribute-value"> &nbsp;{{ $estimate->formatted_estimate_date }}</td>
</td>
                    </tr>
                    <tr>
                        <td class="attribute-label">Valjanost ponude do</td>
                        <td class="attribute-value"> &nbsp;{{ $estimate->formatted_expiry_date }}</td>
                    </tr>
                    <tr>
                        <td class="attribute-label">Ponudu izradio/la</td>
                        <td class="attribute-value"> &nbsp;Jasmin Batlak</td>
                    </tr>
                    <tr>
                        <td class="attribute-label">Mjesto izdavanja</td>
                        <td class="attribute-value"> &nbsp;Jastrebarsko</td>
                    </tr>
                </table>
            </div>
            <div style="clear: both;"></div>

            @include('app.pdf.estimate.partials.table')

            <div class="notes">
                @if ($notes)
                    <div class="notes-label">
                        @lang('pdf_notes')
                    </div>
                    {!! $notes !!}
                @endif
            </div>
        </div>
    </div>
<footer>
    <div class="footer-wrapper">
        <p class="footer-table text-center">IBAN: HR27 2484008 1105902683 | Poslovna banka: RBA d.d. Petrinjska 59, Zagreb | Trgovački Sud u Zagrebu Broj upisa: Tt-11/11034-2 | Temeljni kapital: 20.000,00 kn uplaćen u cijelosti | Direktor: Jasmin Batlak</p>
    </div>
</footer>


</body>

</html>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Welcome Email Template</title>


    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'>

    <link rel="stylesheet" href="css/style.css">

    <style>

        /**********************************************
 * Ink v1.0.5 - Copyright 2013 ZURB Inc        *
 **********************************************/
        /* Client-specific Styles and Reset */
        #outlook a {
            padding: 0;
        }

        body {
            width: 100% !important;
            min-width: 100%;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }

        /* .ExternalClass applies to Outlook.com (the artist formerly known as Hotmail)  */
        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        #backgroundTable {
            margin: 0;
            padding: 0;
            width: 100% !important;
            line-height: 100% !important;
        }

        img {
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
            width: auto;
            max-width: 100%;
            float: left;
            clear: both;
            display: block;
        }

        center {
            width: 100%;
            min-width: 580px;
        }

        a img {
            border: none;
        }

        p {
            margin: 0 0 0 10px;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
        }

        td {
            word-break: break-word;
            -webkit-hyphens: none;
            -moz-hyphens: none;
            hyphens: none;
            border-collapse: collapse !important;
        }

        table, tr, td {
            padding: 0;
            vertical-align: top;
            text-align: left;
        }

        hr {
            color: #d9d9d9;
            background-color: #d9d9d9;
            height: 1px;
            border: none;
        }

        /* Responsive Grid */
        table.body {
            height: 100%;
            width: 100%;
        }

        table.container {
            width: 580px;
            margin: 0 auto;
            text-align: inherit;
        }

        table.row {
            padding: 0px;
            width: 100%;
            position: relative;
        }

        table.container table.row {
            display: block;
        }

        td.wrapper {
            padding: 10px 20px 0px 0px;
            position: relative;
        }

        table.columns,
        table.column {
            margin: 0 auto;
        }

        table.columns td,
        table.column td {
            padding: 0px 0px 10px;
        }

        table.columns td.sub-columns,
        table.column td.sub-columns,
        table.columns td.sub-column,
        table.column td.sub-column {
            padding-right: 10px;
        }

        td.sub-column, td.sub-columns {
            min-width: 0px;
        }

        table.row td.last,
        table.container td.last {
            padding-right: 0px;
        }

        table.one {
            width: 30px;
        }

        table.two {
            width: 80px;
        }

        table.three {
            width: 130px;
        }

        table.four {
            width: 180px;
        }

        table.five {
            width: 230px;
        }

        table.six {
            width: 280px;
        }

        table.seven {
            width: 330px;
        }

        table.eight {
            width: 380px;
        }

        table.nine {
            width: 430px;
        }

        table.ten {
            width: 480px;
        }

        table.eleven {
            width: 530px;
        }

        table.twelve {
            width: 580px;
        }

        table.one center {
            min-width: 30px;
        }

        table.two center {
            min-width: 80px;
        }

        table.three center {
            min-width: 130px;
        }

        table.four center {
            min-width: 180px;
        }

        table.five center {
            min-width: 230px;
        }

        table.six center {
            min-width: 280px;
        }

        table.seven center {
            min-width: 330px;
        }

        table.eight center {
            min-width: 380px;
        }

        table.nine center {
            min-width: 430px;
        }

        table.ten center {
            min-width: 480px;
        }

        table.eleven center {
            min-width: 530px;
        }

        table.twelve center {
            min-width: 580px;
        }

        table.one .panel center {
            min-width: 10px;
        }

        table.two .panel center {
            min-width: 60px;
        }

        table.three .panel center {
            min-width: 110px;
        }

        table.four .panel center {
            min-width: 160px;
        }

        table.five .panel center {
            min-width: 210px;
        }

        table.six .panel center {
            min-width: 260px;
        }

        table.seven .panel center {
            min-width: 310px;
        }

        table.eight .panel center {
            min-width: 360px;
        }

        table.nine .panel center {
            min-width: 410px;
        }

        table.ten .panel center {
            min-width: 460px;
        }

        table.eleven .panel center {
            min-width: 510px;
        }

        table.twelve .panel center {
            min-width: 560px;
        }

        .body .columns td.one,
        .body .column td.one {
            width: 8.333333%;
        }

        .body .columns td.two,
        .body .column td.two {
            width: 16.666666%;
        }

        .body .columns td.three,
        .body .column td.three {
            width: 25%;
        }

        .body .columns td.four,
        .body .column td.four {
            width: 33.333333%;
        }

        .body .columns td.five,
        .body .column td.five {
            width: 41.666666%;
        }

        .body .columns td.six,
        .body .column td.six {
            width: 50%;
        }

        .body .columns td.seven,
        .body .column td.seven {
            width: 58.333333%;
        }

        .body .columns td.eight,
        .body .column td.eight {
            width: 66.666666%;
        }

        .body .columns td.nine,
        .body .column td.nine {
            width: 75%;
        }

        .body .columns td.ten,
        .body .column td.ten {
            width: 83.333333%;
        }

        .body .columns td.eleven,
        .body .column td.eleven {
            width: 91.666666%;
        }

        .body .columns td.twelve,
        .body .column td.twelve {
            width: 100%;
        }

        td.offset-by-one {
            padding-left: 50px;
        }

        td.offset-by-two {
            padding-left: 100px;
        }

        td.offset-by-three {
            padding-left: 150px;
        }

        td.offset-by-four {
            padding-left: 200px;
        }

        td.offset-by-five {
            padding-left: 250px;
        }

        td.offset-by-six {
            padding-left: 300px;
        }

        td.offset-by-seven {
            padding-left: 350px;
        }

        td.offset-by-eight {
            padding-left: 400px;
        }

        td.offset-by-nine {
            padding-left: 450px;
        }

        td.offset-by-ten {
            padding-left: 500px;
        }

        td.offset-by-eleven {
            padding-left: 550px;
        }

        td.expander {
            visibility: hidden;
            width: 0px;
            padding: 0 !important;
        }

        table.columns .text-pad,
        table.column .text-pad {
            padding-left: 10px;
            padding-right: 10px;
        }

        table.columns .left-text-pad,
        table.columns .text-pad-left,
        table.column .left-text-pad,
        table.column .text-pad-left {
            padding-left: 10px;
        }

        table.columns .right-text-pad,
        table.columns .text-pad-right,
        table.column .right-text-pad,
        table.column .text-pad-right {
            padding-right: 10px;
        }

        /* Block Grid */
        .block-grid {
            width: 100%;
            max-width: 580px;
        }

        .block-grid td {
            display: inline-block;
            padding: 10px;
        }

        .two-up td {
            width: 270px;
        }

        .three-up td {
            width: 173px;
        }

        .four-up td {
            width: 125px;
        }

        .five-up td {
            width: 96px;
        }

        .six-up td {
            width: 76px;
        }

        .seven-up td {
            width: 62px;
        }

        .eight-up td {
            width: 52px;
        }

        /* Alignment and Visibility Classes */
        table.center, td.center {
            text-align: center;
        }

        h1.center,
        h2.center,
        h3.center,
        h4.center,
        h5.center,
        h6.center,
        p.center {
            text-align: center;
        }

        span.center {
            display: block;
            width: 100%;
            text-align: center;
        }

        img.center {
            margin: 0 auto;
            float: none;
        }

        .show-for-small,
        .hide-for-desktop {
            display: none;
            width: 0;
            mso-hide: all;
            overflow: hidden;
        }

        .show-for-small *,
        .hide-for-desktop * {
            mso-hide: all;
        }

        /* Typography */
        body, table.body, h1, h2, h3, h4, h5, h6, p, td {
            color: #222222;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: normal;
            padding: 0;
            margin: 0;
            text-align: left;
            line-height: 1.3;
        }

        h1, h2, h3, h4, h5, h6 {
            word-break: normal;
        }

        h1 {
            font-size: 40px;
        }

        h2 {
            font-size: 36px;
        }

        h3 {
            font-size: 32px;
        }

        h4 {
            font-size: 28px;
        }

        h5 {
            font-size: 24px;
        }

        h6 {
            font-size: 20px;
        }

        body, table.body, p, td {
            font-size: 14px;
            line-height: 19px;
        }

        p.lead, p.lede, p.leed {
            font-size: 18px;
            line-height: 21px;
        }

        p {
            margin-bottom: 10px;
        }

        small {
            font-size: 10px;
        }

        a {
            color: #16ABA3;
            text-decoration: none;
        }

        a:hover {
            color: #13948d !important;
        }

        a:active {
            color: #2795b6 !important;
        }

        a:visited {
            color: #2ba6cb !important;
        }

        h1 a,
        h2 a,
        h3 a,
        h4 a,
        h5 a,
        h6 a {
            color: #2ba6cb;
        }

        h1 a:active,
        h2 a:active,
        h3 a:active,
        h4 a:active,
        h5 a:active,
        h6 a:active {
            color: #2ba6cb !important;
        }

        h1 a:visited,
        h2 a:visited,
        h3 a:visited,
        h4 a:visited,
        h5 a:visited,
        h6 a:visited {
            color: #2ba6cb !important;
        }

        /* Panels */
        .panel {
            background: #f2f2f2;
            border: 1px solid #d9d9d9;
            padding: 10px !important;
        }

        .sub-grid table {
            width: 100%;
        }

        .sub-grid td.sub-columns {
            padding-bottom: 0;
        }

        /* Buttons */
        table.button,
        table.tiny-button,
        table.small-button,
        table.medium-button,
        table.large-button {
            width: 100%;
            overflow: hidden;
        }

        table.button td,
        table.tiny-button td,
        table.small-button td,
        table.medium-button td,
        table.large-button td {
            display: block;
            width: auto !important;
            text-align: center;
            background: #127F8D;
            border: 1px solid #2284a1;
            color: #ffffff;
            padding: 8px 0;
            line-height: initial !important;
        }

        table.tiny-button td {
            padding: 0;
        }

        table.small-button td {
            padding: 8px 0;
        }

        table.medium-button td {
            padding: 12px 0;
        }

        table.large-button td {
            padding: 21px 0;
        }

        table.button td a,
        table.tiny-button td a,
        table.small-button td a,
        table.medium-button td a,
        table.large-button td a {
            font-weight: bold;
            text-decoration: none;
            font-family: Helvetica, Arial, sans-serif;
            color: #ffffff;
            font-size: 16px;
            display: block;
            height: 100%;
            width: 100%;
        }

        table.tiny-button td a {
            padding: 8px 0;
            font-size: 12px;
            font-weight: normal;
        }

        table.small-button td a {
            font-size: 16px;
        }

        table.medium-button td a {
            font-size: 20px;
        }

        table.large-button td a {
            font-size: 24px;
        }

        table.button:hover td,
        table.button:visited td,
        table.button:active td {
            background: #2795b6 !important;
        }

        table.button:hover td a,
        table.button:visited td a,
        table.button:active td a {
            color: #ffffff !important;
        }

        table.button:hover td,
        table.tiny-button:hover td,
        table.small-button:hover td,
        table.medium-button:hover td,
        table.large-button:hover td {
            background: #0f6b76 !important;
        }

        table.button:hover td a,
        table.button:active td a,
        table.button td a:visited,
        table.tiny-button:hover td a,
        table.tiny-button:active td a,
        table.tiny-button td a:visited,
        table.small-button:hover td a,
        table.small-button:active td a,
        table.small-button td a:visited,
        table.medium-button:hover td a,
        table.medium-button:active td a,
        table.medium-button td a:visited,
        table.large-button:hover td a,
        table.large-button:active td a,
        table.large-button td a:visited {
            color: #ffffff !important;
        }

        table.secondary td {
            background: #e9e9e9;
            border-color: #d0d0d0;
            color: #555555;
        }

        table.secondary td a {
            color: #555555;
        }

        table.secondary:hover td {
            background: #d0d0d0 !important;
            color: #555555;
        }

        table.secondary:hover td a,
        table.secondary td a:visited,
        table.secondary:active td a {
            color: #555555 !important;
        }

        table.success td {
            background: #16ABA3;
            border-color: #13948d;
        }

        table.success:hover td {
            background: #13948d !important;
        }

        table.alert td {
            background: #c60f13;
            border-color: #970b0e;
        }

        table.alert:hover td {
            background: #970b0e !important;
        }

        table.radius td {
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        table.round td {
            -webkit-border-radius: 500px;
            -moz-border-radius: 500px;
            border-radius: 500px;
        }

        /* Outlook First */
        body.outlook p {
            display: inline !important;
        }

        /*  Media Queries */
        @media only screen and (max-width: 600px) {
            table[class="body"] img {
                max-width: auto !important;
                max-height: auto !important;
            }

            table[class="body"] center {
                min-width: 0 !important;
            }

            table[class="body"] .container {
                width: 95% !important;
            }

            table[class="body"] .row {
                width: 100% !important;
                display: block !important;
            }

            table[class="body"] .wrapper {
                display: block !important;
                padding-right: 0 !important;
            }

            table[class="body"] .columns,
            table[class="body"] .column {
                table-layout: fixed !important;
                float: none !important;
                width: 100% !important;
                padding-right: 0px !important;
                padding-left: 0px !important;
                display: block !important;
            }

            table[class="body"] .wrapper.first .columns,
            table[class="body"] .wrapper.first .column {
                display: table !important;
            }

            table[class="body"] table.columns td,
            table[class="body"] table.column td {
                width: 100% !important;
            }

            table[class="body"] .columns td.one,
            table[class="body"] .column td.one {
                width: 8.333333% !important;
            }

            table[class="body"] .columns td.two,
            table[class="body"] .column td.two {
                width: 16.666666% !important;
            }

            table[class="body"] .columns td.three,
            table[class="body"] .column td.three {
                width: 25% !important;
            }

            table[class="body"] .columns td.four,
            table[class="body"] .column td.four {
                width: 33.333333% !important;
            }

            table[class="body"] .columns td.five,
            table[class="body"] .column td.five {
                width: 41.666666% !important;
            }

            table[class="body"] .columns td.six,
            table[class="body"] .column td.six {
                width: 50% !important;
            }

            table[class="body"] .columns td.seven,
            table[class="body"] .column td.seven {
                width: 58.333333% !important;
            }

            table[class="body"] .columns td.eight,
            table[class="body"] .column td.eight {
                width: 66.666666% !important;
            }

            table[class="body"] .columns td.nine,
            table[class="body"] .column td.nine {
                width: 75% !important;
            }

            table[class="body"] .columns td.ten,
            table[class="body"] .column td.ten {
                width: 83.333333% !important;
            }

            table[class="body"] .columns td.eleven,
            table[class="body"] .column td.eleven {
                width: 91.666666% !important;
            }

            table[class="body"] .columns td.twelve,
            table[class="body"] .column td.twelve {
                width: 100% !important;
            }

            table[class="body"] td.offset-by-one,
            table[class="body"] td.offset-by-two,
            table[class="body"] td.offset-by-three,
            table[class="body"] td.offset-by-four,
            table[class="body"] td.offset-by-five,
            table[class="body"] td.offset-by-six,
            table[class="body"] td.offset-by-seven,
            table[class="body"] td.offset-by-eight,
            table[class="body"] td.offset-by-nine,
            table[class="body"] td.offset-by-ten,
            table[class="body"] td.offset-by-eleven {
                padding-left: 0 !important;
            }

            table[class="body"] table.columns td.expander {
                width: 1px !important;
            }

            table[class="body"] .right-text-pad,
            table[class="body"] .text-pad-right {
                padding-left: 10px !important;
            }

            table[class="body"] .left-text-pad,
            table[class="body"] .text-pad-left {
                padding-right: 10px !important;
            }

            table[class="body"] .hide-for-small,
            table[class="body"] .show-for-desktop {
                display: none !important;
            }

            table[class="body"] .show-for-small,
            table[class="body"] .hide-for-desktop {
                display: block !important;
                width: auto !important;
                overflow: visible !important;
            }
        }
        /* ~~~~~~~~~~ Layout ~~~~~~~~~~ */
        body, .body {
            background: #E0E0E0;
        }

        .white-bg {
            background: white;
        }

        .spacer, table.spacer {
            margin-top: 20px;
        }

        table.row td.section {
            padding: 30px;
        }
        @media only screen and (max-width: 600px) {
            table.row td.section {
                padding: 10px;
            }
        }

        .text-center, .text-center td, .text-center table, .text-center p {
            text-align: center;
        }

        .center {
            margin: 0 auto;
        }

        .teal-border {
            border-top: solid 5px #1D7D86;
        }

        /* ~~~~~~~~~~ Headers ~~~~~~~~~~ */
        h3 {
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        h4 {
            color: #1D7D86;
            font-size: 12px;
            margin-bottom: 0;
            text-transform: uppercase;
            font-weight: bold;
        }
        h4 a {
            font-size: 10px;
        }

        /* ~~~~~~~~~~ Buttons ~~~~~~~~~~ */
        .button.facebook td, .button.twitter td {
            padding: 0;
            border-radius: 3px;
        }
        .button.facebook td a, .button.twitter td a {
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 100;
            letter-spacing: 1px;
            display: block;
            height: 100%;
            width: 100%;
        }
        .button.facebook td a .text, .button.twitter td a .text {
            padding: 15px 0;
            display: block;
        }
        .button.facebook td a img, .button.twitter td a img {
            width: 20px;
            margin-top: -5px;
            padding: 12px 15px;
            float: left;
        }

        .button.facebook td {
            background: #2F4682;
            border-color: #283c6f;
        }
        .button.facebook:hover td {
            background: #283c6f !important;
        }

        .button.twitter td {
            background: #3F99D4;
            border-color: #2e8dcc;
        }
        .button.twitter:hover td {
            background: #2e8dcc !important;
        }

        .fb-round, .tw-round {
            border-radius: 50%;
            height: 40px;
            width: 40px;
            display: block;
            float: right;
            margin-left: 10px;
        }

        .fb-round {
            background: #2F4682;
        }
        .fb-round:hover {
            background: #283c6f !important;
        }
        .fb-round img {
            width: 13px;
            padding: 7px 10px 0 13px;
        }

        .tw-round {
            background: #3F99D4;
        }
        .tw-round:hover {
            background: #2e8dcc !important;
        }
        .tw-round img {
            width: 21px;
            padding: 10px;
        }

        /* ~~~~~~~~~~ Page Sections ~~~~~~~~~~ */
        .hero-quote {
            font-style: italic;
            font-size: 16px;
            padding: 20px 60px;
        }
        @media only screen and (max-width: 600px) {
            .hero-quote {
                padding: 10px;
            }
        }
        .hero-quote span {
            letter-spacing: 1px;
            font-size: 10px;
            text-transform: uppercase;
            font-weight: bold;
        }

        td.experiences {
            padding: 0 10px;
        }
        td.experiences table.six {
            width: 275px;
        }
        td.experiences .wrapper {
            padding: 10px 10px 0 0;
        }
        td.experiences .experience {
            border-bottom: solid thin #C1C1C1;
        }
        td.experiences .experience.last {
            border: none;
        }
        td.experiences .experience .content h3 {
            font-size: 16px;
        }
        td.experiences .experience .content h3 span {
            color: #1D7E87;
        }
        td.experiences .experience .content .when {
            font-weight: bold;
            color: #3C3C3C;
            margin-bottom: 0;
            margin-top: 15px;
        }
        td.experiences .experience .content .where {
            font-style: italic;
            font-size: 13px;
            margin-bottom: 15px;
        }
        td.experiences .experience .content .description {
            font-weight: 100;
            font-size: 14px;
            line-height: 1.6;
            letter-spacing: .03em;
            margin-bottom: 0;
        }
        td.experiences .experience .content .social {
            padding-top: 5px;
            padding-bottom: 15px;
        }

        td.user-submitted, td.plan-ahead {
            padding: 0 10px;
        }
        td.user-submitted td.wrapper, td.plan-ahead td.wrapper {
            padding-right: 10px;
        }
        td.user-submitted td.wrapper.last, td.plan-ahead td.wrapper.last {
            padding-right: 0px;
        }

        td.plan-ahead.last {
            padding-bottom: 10px;
        }

        .user-submitted .user {
            font-weight: bold;
        }
        .user-submitted .what {
            font-weight: bold;
            font-size: 12px;
            line-height: 1.2;
            margin-top: 5px;
            margin-bottom: 0px;
        }
        .user-submitted .where {
            font-style: italic;
            font-size: 10px;
            margin-bottom: 5px;
        }

        .plan-ahead .picture {
            padding-bottom: 0;
        }
        .plan-ahead .details {
            background: #E0E0E0;
            padding: 10px;
        }
        .plan-ahead .details h3 {
            font-size: 12px;
        }
        .plan-ahead .details h3 span {
            color: #16ABA3;
        }
        .plan-ahead .details .description {
            font-size: 11px;
            line-height: 1.5;
            font-weight: 100;
        }
        .plan-ahead .details .cta {
            font-size: 9px;
            font-weight: 100;
            color: #A4A4A4;
            margin-bottom: 0;
        }
        .plan-ahead .calendar-cta {
            padding: 10px;
        }

        table.footer {
            background: #CFCECE;
            padding: 40px 0;
        }
        table.footer p {
            color: #808080;
            font-weight: 100;
        }

        /* ~~~~~~~~~~ Page Elements ~~~~~~~~~~ */
        .hero-image, .hero-image td {
            padding: 0;
        }

        p.inspire-us {
            font-style: italic;
            color: #777;
        }

        img.user-image {
            border-radius: 50%;
        }

        .inspire {
            float: right;
            margin-top: 10px;
            text-transform: uppercase;
            font-size: 9px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-right: 20px;
        }

        table[class="body"] .logo img {
            width: 20px !important;
            float: left;
            margin-bottom: 10px;
            margin-right: 10px;
        }

        img.appstore {
            width: 150px;
        }

        img.stars {
            width: 70px;
            margin-bottom: 5px;
        }

        .categories td {
            padding-top: 10px;
        }



    </style>


</head>

<body>
<table class="body">
    <tr>
        <td class="center" align="center" valign="top">
            <center>

                <table class="container">
                    <tr>
                        <td>

                            <table class="row">
                                <tr>
                                    <td class="wrapper last logo">
                                        <h2>Hello {{$user->name}}</h2>

                                        <a href="https://www.get-offline.com"><img height=20 width=20 src="https://s3.amazonaws.com/getoffline/assets/offlineLogo-30x30.png" /></a>
                                        Welcome to Choma!

                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                    <tr>
                        <td>

                            <!-- content start -->
                            <table class="row">
                                <tr>
                                    <td class="wrapper last">

                                        <table class="twelve columns hero-image white-bg">
                                            <tr>
                                                <td>
                                                    <img width="580" src="https://s3.amazonaws.com/getoffline/assets/WelcomeEmailHeader.jpg">
                                                </td>
                                                <td class="expander"></td>
                                            </tr>
                                            <tr>
                                                <td class="white-bg section">
                                                    <p>Whether you're a veteran or you just unpacked the moving truck, by joining Offline you've just started a journey towards doing more, seeing more and experiencing more of the world around you.</p>
                                                    <p>So, cheers to that and cheers to life - we challenge you to live it more memorably</p>
                                                    <p>If tomorrow is Monday or Thursday you're in for a treat.  We send you the low down on what's happening in  twice a week so you'll never be out of the loop.  If it's not, no worries - we've included plenty of gems in this email.</p>
                                                    <p>Peace, Love and Happy Weekends!</p>
                                                    <p>- The Offline Team</p>
                                                </td>
                                                <td class="expander"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <!-- User Submitted Photos start -->
                            <table class="row spacer">
                                <tr>
                                    <td class="">
                                        <h4> Popular Categories </h4>
                                    </td>
                                </tr>
                            </table>
                            <table class="white-bg teal-border categories">
                                <tr>
                                    <td>
                                        <a href=""><img width="580" src="https://s3.amazonaws.com/getoffline/assets/WelcomeEmailCheapDates.jpg"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href=""><img width="580" src="https://s3.amazonaws.com/getoffline/assets/WelcomeEmailDinnerSpots.jpg"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href=""><img width="580" src="https://s3.amazonaws.com/getoffline/assets/WelcomeEmailDogLovers.jpg"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <table class="button tiny-button default">
                                            <tr>
                                                <td>
                                                    <a href="#">24 MORE CATEGORIES</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>


                            <!-- Plan Ahead start -->
                            <table class="row spacer">
                                <tr>
                                    <td class="">
                                        <h4> WHAT'S TRENDING RIGHT NOW IN </h4>
                                    </td>
                                </tr>
                            </table>

                            <table class="white-bg teal-border">
                                <tr>
                                    <td class="plan-ahead">
                                        <table class="row">
                                            <tr>
                                                <td class="wrapper">

                                                    <table class="four columns">
                                                        <tr>
                                                            <td class="picture">
                                                                <img src="http://placehold.it/500x500">
                                                            </td>
                                                            <td class="expander"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="details">
                                                                <h3><span>Dine with the Chefs:</span> Fine Cuban at Old Havana</h3>
                                                                <p class="description">"Indulge in an evening of inimitable gourmet delights by the Triangle's leading cuban chefs."</p>
                                                                <table class="button tiny-button success">
                                                                    <tr>
                                                                        <td>
                                                                            <a href="#">Tell Me More</a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="wrapper">

                                                    <table class="four columns">
                                                        <tr>
                                                            <td class="picture">
                                                                <img src="http://placehold.it/500x500">
                                                            </td>
                                                            <td class="expander"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="details">
                                                                <h3><span>Dine with the Chefs:</span> Fine Cuban at Old Havana</h3>
                                                                <p class="description">"Indulge in an evening of inimitable gourmet delights by the Triangle's leading cuban chefs."</p>
                                                                <table class="button tiny-button success">
                                                                    <tr>
                                                                        <td>
                                                                            <a href="#">Tell Me More</a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="wrapper last">

                                                    <table class="four columns">
                                                        <tr>
                                                            <td class="picture">
                                                                <img src="http://placehold.it/500x500">
                                                            </td>
                                                            <td class="expander"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="details">
                                                                <a href="#">
                                                                    <h3><span>Dine with the Chefs:</span> Fine Cuban at Old Havana</h3>
                                                                    <p class="description">"Indulge in an evening of inimitable gourmet delights by the Triangle's leading cuban chefs."</p>
                                                                </a>
                                                                <table class="button tiny-button success">
                                                                    <tr>
                                                                        <td>
                                                                            <a href="#">Tell Me More</a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="plan-ahead last">
                                        <table class="row">
                                            <tr>
                                                <td class="wrapper">

                                                    <table class="four columns">
                                                        <tr>
                                                            <td class="picture">
                                                                <img src="http://placehold.it/500x500">
                                                            </td>
                                                            <td class="expander"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="details">
                                                                <h3><span>Dine with the Chefs:</span> Fine Cuban at Old Havana</h3>
                                                                <p class="description">"Indulge in an evening of inimitable gourmet delights by the Triangle's leading cuban chefs."</p>
                                                                <table class="button tiny-button success">
                                                                    <tr>
                                                                        <td>
                                                                            <a href="#">Tell Me More</a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="wrapper">

                                                    <table class="four columns">
                                                        <tr>
                                                            <td class="picture">
                                                                <img src="http://placehold.it/500x500">
                                                            </td>
                                                            <td class="expander"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="details">
                                                                <h3><span>Dine with the Chefs:</span> Fine Cuban at Old Havana</h3>
                                                                <p class="description">"Indulge in an evening of inimitable gourmet delights by the Triangle's leading cuban chefs."</p>
                                                                <table class="button tiny-button success">
                                                                    <tr>
                                                                        <td>
                                                                            <a href="#">Tell Me More</a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="wrapper last">

                                                    <table class="four columns">
                                                        <tr>
                                                            <td class="picture">
                                                                <img src="http://placehold.it/500x500">
                                                            </td>
                                                            <td class="expander"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="details">
                                                                <a href="#">
                                                                    <h3><span>Dine with the Chefs:</span> Fine Cuban at Old Havana</h3>
                                                                    <p class="description">"Indulge in an evening of inimitable gourmet delights by the Triangle's leading cuban chefs."</p>
                                                                </a>
                                                                <table class="button tiny-button success">
                                                                    <tr>
                                                                        <td>
                                                                            <a href="#">Tell Me More</a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <table class="button tiny-button default">
                                            <tr>
                                                <td>
                                                    <a href="#">MORE TRENDING</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <table class="row spacer"></table>

                            <!-- container end below -->
                        </td>
                    </tr>
                </table>

                <table class="row footer">
                    <tr>
                        <td class="center" align="center">
                            <center>

                                <table class="container">
                                    <tr>
                                        <td class="wrapper last">
                                            <table class="twelve columns text-center">
                                                <tr>
                                                    <td>
                                                        <br/>
                                                        <a href="#"><img class="center stars" src="https://s3.amazonaws.com/getoffline/assets/stars.png"></a>
                                                        <p>Love Offline? We'll love you too if you give us a great rating in the app store!</p>
                                                        <br/>
                                                        <p>Don't have the app yet? Get it <a href="#">here!</a><p>
                                                            <a href="#"><img class="center appstore" src="https://s3.amazonaws.com/getoffline/assets/appStoreBadge.png"></a>
                                                            <br/>
                                                        <p>Have questions or feedback? <a href="#">Tell us!</a> Don't want these emails? <a href="#">Unsubscribe :(</a><p>
                                                        <p> &copy; 2015 | Get-Offline.com</p>
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                    </tr>
                                </table>

                            </center>
                        </td>
                    </tr>
                </table>

            </center>
        </td>
    </tr>
</table>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>


</body>
</html>

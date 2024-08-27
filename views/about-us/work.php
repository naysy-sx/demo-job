<?php $this->title = 'Карьера'; ?>
<div class="container mainc">
    <main>
        <style>
            html {
                overflow-x: hidden;
            }

            .page-type-standart {
                overflow: hidden;
            }

            .page-type-standart .container.mainc {
                max-width: 100% !important;
                margin: 0 auto;
                padding: 0 !important;
            }
            .page-type-standart .container.mainc > main {
                padding-top: 0 !important;
            }

            .careers-subtitle {
                text-transform: uppercase;
                font-weight: 400;
                font-size: 1rem;
                background-color: transparent;
                padding: 0;
                border-radius: inherit;
            }

            .button-arrow{
                display: inline-flex;
                width: 32px;
                height: 32px;
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center center;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='currentColor' d='M16.175 13H5q-.425 0-.712-.288T4 12q0-.425.288-.712T5 11h11.175l-4.9-4.9q-.3-.3-.288-.7t.313-.7q.3-.275.7-.288t.7.288l6.6 6.6q.15.15.213.325t.062.375q0 .2-.062.375t-.213.325l-6.6 6.6q-.275.275-.687.275T11.3 19.3q-.3-.3-.3-.712t.3-.713z'/%3E%3C/svg%3E");
            }

            .careers-intro-wrapper {
                position: relative;
                overflow: hidden;
            }

            .careers-intro-wrapper .container {
                position: relative;
                z-index: 1;
            }

            .careers-intro-bg {
                position: absolute;
                object-fit: cover;
                height: 100%;
                width: 100%;
            }

            .careers-intro {
                display: grid;
                grid-template-columns: minmax(320px, 600px) 1fr;
                grid-template-rows: auto auto auto;
                grid-template-areas: "subtitle image" "title image" "footer image";
                align-items: center;
                padding: clamp(3.125rem, 2.375rem + 2.5vw, 4.625rem) 0 clamp(2.75rem, 2.125rem + 2vw, 4rem);
                grid-column-gap: clamp(1rem, 0.6rem + 1vw, 1.5rem);
                grid-row-gap: 0.5rem;
            }

            .careers-intro .careers-subtitle {
                grid-area: subtitle;
                color: #fff;
                align-self: end;
                padding-top: clamp(1.2rem, 0.4rem + 2vw, 2.2rem);
                background-color: transparent;
                padding: 0;
            }

            .careers-intro-title {
                grid-area: title;
                color: #fff;
                font-weight: 800;
                font-size: clamp(1.875rem, 1.46875rem + 1.4vw, 2.6875rem);;
                margin: 0;
                align-self: baseline;
                padding-top: clamp(1.875rem, 1.46875rem + 1.4vw, 2.6875rem);;
            }

            .careers-intro-footer {
                grid-area: footer;
                align-self: baseline;
                position: relative;
                z-index: 1;
            }

            .careers-intro-button,
            .careers-intro-button:hover {
                display: inline-flex;
                background-color: #fff;
                color: #030602;
                padding: 6px 17px;
                border-radius: 6px;
                box-shadow: 0 3px 10px 0 rgb(0 0 0 / 10%);
                letter-spacing: -0.4px;
                text-decoration: none;
                align-items: center;
                font-size: 17px;
                gap: 9px;
                letter-spacing: -0.5px;
            }

            .careers-intro-button .button-arrow{
                transition: background-image 0.3s, transform 0.3s;
            }

            .careers-intro-button:hover .button-arrow{
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='%2348bf4e' d='M16.175 13H5q-.425 0-.712-.288T4 12q0-.425.288-.712T5 11h11.175l-4.9-4.9q-.3-.3-.288-.7t.313-.7q.3-.275.7-.288t.7.288l6.6 6.6q.15.15.213.325t.062.375q0 .2-.062.375t-.213.325l-6.6 6.6q-.275.275-.687.275T11.3 19.3q-.3-.3-.3-.712t.3-.713z'/%3E%3C/svg%3E");
                transform: translateX(2px);
            }

            .careers-intro-image {
                grid-area: image;
                margin: 0;
                position: relative;
            }

            .careers-intro-image:before {
                content: "";
                display: block;
                position: absolute;
                width: 100%;
                height: 100%;
                background-image: url("/img/career/confetti.png");
                background-size: contain;
                transform: scale(1.2);
            }

            .careers-intro-image img {
                transform: scale(1.18) translate(41px, 24px);
            }

            .careers-description-wrapper {
                padding: clamp(2.5rem, -0.53125rem + 10.104166666666666vw, 8.5625rem) 0;
            }

            .careers-description {
                display: grid;
                grid-template-columns: clamp(20rem, 15.5rem + 15vw, 29rem) auto;
                grid-template-rows: auto auto;
                grid-column-gap: clamp(4.8125rem, 3.75rem + 3.5vw, 6.9375rem);
                grid-row-gap: 7px;
                grid-template-areas:
        "logo content"
        "title content";
            }

            .careers-description-logo {
                grid-area: logo;
            }

            .careers-description-logo img{
                max-width: 470px;
                margin: 0 auto 0 0;
            }

            .careers-description-title {
                grid-area: title;
                margin: 0;
                font-weight: 100;
                font-size: clamp(1.4375rem, 1.1375rem + 0.75vw, 1.8125rem);
            }

            .careers-description-content {
                grid-area: content;
            }
            .careers-description-content p {
                margin: 0;
                font-size: clamp(1rem, 0.8125rem + 0.625vw, 1.375rem);
                letter-spacing: 0.1px;
                white-space: nowrap;
                line-height: 1.7;
            }


            @media (min-width: 1500px) {
                .careers-description {
                    padding: 0 15px;
                }
                .careers-description-title {
                    padding: 0 0 0 9px;
                }
            }

            .careers-info-item.-advantages {
                background-image: url("/img/career/bg-1.png");
                background-position: center top;
                background-size: cover;
                padding-top: clamp(3rem, 0.84rem + 5.4vw, 5.7rem);
                margin-bottom: -4px;
                overflow: hidden;
            }

            .careers-info-item.-advantages .careers-subtitle {
                display: block;
                margin-bottom: clamp(2rem, 1rem + 2.5vw, 3.25rem);
            }

            .careers-advantages-list {
                margin: 0;
                padding: 0;
            }

            .careers-info-item {
            }

            .careers-advantages-card {
                list-style-type: none;
                margin-bottom: 0;
            }

            .careers-advantages-row.-first {
                display: grid;
                grid-template-columns: minmax(0, 500px) 1fr;
                grid-column-gap: clamp(2rem, 1.2rem + 2vw, 3rem);
                grid-template-rows: auto auto;
                grid-template-areas: "title pics" "shorttext pics";
                padding-bottom: 3rem;
            }

            .careers-advantages-title {
                grid-area: title;
                font-size: clamp(1.375rem, 1.075rem + 0.75vw, 1.75rem);
                font-weight: 900;
                letter-spacing: 0.4px;
                margin-bottom: 18px;
                padding: 0;
            }

            .careers-advantages-shorttext {
                grid-area: shorttext;
            }

            .careers-advantages-shorttext p {
                letter-spacing: -0.4px;
            }

            .careers-advantages-pics {
                grid-area: pics;
                position: relative;
                margin: 0;
                transform: translateY(-40px);
            }

            .careers-advantages-pics img {
                position: absolute;
                border-radius: 16px;
            }
            .careers-advantages-pics img:first-child {
                width: 47%;
                right: 2rem;
                bottom: 2rem;
            }
            .careers-advantages-pics img:last-child {
                width: 56%;
                left: 0;
                top: 0;
            }

            .careers-advantages-items {
                padding: 0;
                columns: 2;
                transform: translate(-18px, 7px);
                padding-bottom: clamp(2.5rem, 0.9rem + 4vw, 4.5rem);
            }

            .careers-col-item {
                list-style-type: none;
                display: inline-block;
                margin-bottom: -3px;
            }
            .careers-col-item:before {
                display: none;
            }

            .careers-col-row {
                display: grid;
                grid-template-columns: clamp(5rem, 2.75rem + 5.625vw, 7.8125rem) 1fr;
                grid-column-gap: 3px;
            }

            .careers-advantages-text {
                max-width: 400px;
                letter-spacing: -0.4px;
                align-self: center;
                transform: translateY(-2px);
            }

            .careers-info-item.-goals {
                overflow: hidden;
                /*background-image: url('/img/career/bg-2.png');*/
                background-color: #f8f8fa;
                background-position: center top;
                background-size: cover;
                padding: clamp(3rem, 1.4rem + 4vw, 5rem) 0;
            }

            .careers-info-item.-goals .container {
                max-width: 1500px;
            }

            .careers-info-item.-goals .careers-subtitle {
                position: relative;
                left: 11.3rem;
                z-index: 3;
            }

            .careers-goals-list {
                display: flex;
                justify-content: center;
                gap: 1rem;
                margin: -1rem 0 0 0;
                padding: 0 0 1.5rem;
                counter-reset: number;
            }

            .careers-goals-card {
                list-style-type: none;
                position: relative;
                width: clamp(5rem, -2.5rem + 24vw, 20rem);
                height: clamp(5rem, -1.875rem + 22vw, 18.75rem);
                margin: 0;
            }

            .careers-goals-card:before {
                counter-increment: number;
                content: counter(number);
                font-size: clamp(3.125rem, -3.125rem + 20vw, 15.625rem);
                font-weight: 700;
                background: transparent;
                position: absolute;
                left: inherit;
                top: inherit;
                width: inherit;
                height: inherit;
                border-radius: inherit;
            }

            .careers-goals-card:nth-child(1):before {
                color: #c0fb29;
            }

            .careers-goals-card:nth-child(2):before {
                color: #82ef17;
            }

            .careers-goals-card:nth-child(3):before {
                color: #26cc8f;
            }

            .careers-goals-card:nth-child(4):before {
                color: #0faacc;
            }

            .careers-goals-card:nth-child(5):before {
                color: #23b9e1;
            }

            .careers-goals-card:after {
                content: "";
                display: block;
                list-style-type: none;
                position: absolute;
                width: 100%;
                height: 100%;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                background-image: url("/img/career/shadow-2_2.png");
                background-position: center center;
                background-size: contain;
                z-index: 1;
            }

            .careers-goals-card span {
                position: absolute;
                z-index: 2;
                line-height: 1.2;
                display: block;
                bottom: -7px;
                left: 33%;
                font-size: clamp(1rem, 0.7813rem + 0.7vw, 1.4375rem);
                height: clamp(1.25rem, 0.625rem + 2vw, 2.5rem);
            }

            .careers-info-item.-cards {
                padding: clamp(3rem, 2.6rem + 2vw, 5rem) 0;
                background-image: url("/img/career/decor-1.png");
                background-position: top 62% left -14px;
                background-size: contain;
                background-repeat: no-repeat;
            }

            .careers-info-item.-cards .careers-subtitle {
                margin-bottom: clamp(2rem, 1.7rem + 1.5vw, 3.5rem);
                display: block;
            }

            .careers-cards-list {
                margin: 0;
                padding: 0;
            }

            .careers-cards-item {
                list-style-type: none;
                margin: 0;
            }

            .careers-cards-row {
                display: flex;
                gap: clamp(2rem, -4.6rem + 10.999999999999998vw, 5.3rem);
            }

            .careers-cards-item + .careers-cards-item {
                margin-top: clamp(2rem, -2rem + 10vw, 7rem);
            }

            .careers-cards-item:nth-child(even) .careers-cards-row {
                flex-direction: row-reverse;
            }

            .careers-cards-image {
                position: relative;
                margin: 0;
                width: clamp(19.4375rem, 2.6875rem + 27.916666666666668vw, 27.8125rem);
                flex-basis: clamp(19.4375rem, 2.6875rem + 27.916666666666668vw, 27.8125rem);
                overflow: hidden;
                min-width: clamp(19.4375rem, 2.6875rem + 27.916666666666668vw, 27.8125rem);
                height: clamp(13.125rem, 1.875rem + 18.75vw, 18.75rem);
            }

            .careers-cards-image img {
                position: absolute;
                border-radius: 20px;
                width: 100%;
                height: 100%;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                object-fit: cover;
            }

            .careers-cards-title {
                font-size: 28px;
                font-weight: 900;
                letter-spacing: 0.4px;
                margin-bottom: 30px;
                max-width: 340px;
                padding: 0;
            }

            .careers-cards-items p {
                letter-spacing: -0.4px;
            }

            @media (max-width: 769px) {
                .careers-cards-image {
                    width: 100%;
                    flex-basis: 100%;
                    overflow: hidden;
                    min-width: 100%;
                    height: auto;
                    aspect-ratio: 4 / 3;
                }

                .careers-cards-items p br {
                    display: none;
                }

                .careers-cards-row,
                .careers-cards-item:nth-child(even) .careers-cards-row {
                    flex-direction: column;
                }
            }

            .careers-info-item.-values {
                /*background-image: url('/img/career/bg-3.svg');
		background-position: center bottom 0;
		background-size: cover;
		background-repeat: no-repeat;*/

                background: rgb(255, 255, 255);
                background: -moz-radial-gradient(
                        circle,
                        rgba(255, 255, 255, 1) 0%,
                        rgba(219 230 233 / 24%) 100%
                );
                background: -webkit-radial-gradient(
                        circle,
                        rgba(255, 255, 255, 1) 0%,
                        rgba(219 230 233 / 24%) 100%
                );
                background: radial-gradient(
                        circle,
                        rgba(255, 255, 255, 1) 0%,
                        rgb(219 230 233 / 24%) 100%
                );
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffffff",endColorstr="#dbe6e9",GradientType=1);

                padding: clamp(4rem, 3.6rem + 2vw, 6rem) 0 0;
            }

            .careers-info-item.-values .careers-subtitle {
                display: block;
                margin-bottom: clamp(4rem, 3.54rem + 2.3vw, 6.3rem);
            }

            .careers-values-list {
                display: grid;
                margin: 0 0 clamp(3rem, 0.6rem + 6vw, 6rem);
                padding: 0;
                grid-template-columns: repeat(4, 1fr);
                grid-template-rows: auto auto;
                grid-template-areas:
			"one two two three"
			"for for five five";
                grid-column-gap: 24px;
                grid-row-gap: clamp(2.625rem, 0.125rem + 6.25vw, 5.75rem);
            }

            @media (min-width: 1500px) {
                .careers-values-list {
                    background-image: url("/img/career/shodow-grid.png");
                    background-repeat: no-repeat;
                    background-size: 134%;
                    background-position: left -12rem top -10rem;
                }
            }

            .careers-values-item {
                list-style-type: none;
                margin: 0;
            }

            .careers-values-item b {
                color: #00d200;
                display: block;
                margin-bottom: 7px;
                font-weight: 100;
                font-size: clamp(2rem, 1.475rem + 2.625vw, 4.625rem);
                line-height: 1;
            }

            .careers-values-item:nth-child(1) {
                grid-area: one;
            }

            .careers-values-item:nth-child(2) {
                grid-area: two;
                transform: translateX(28px);
            }

            .careers-values-item:nth-child(3) {
                grid-area: three;
            }

            .careers-values-item:nth-child(4) {
                grid-area: for;
            }

            .careers-values-item:nth-child(5) {
                grid-area: five;
                transform: translateX(45px);
            }

            .careers-values-why {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto auto;
                grid-template-areas: "title image" "list image";
            }

            .careers-values-why ul {
                margin: 0;
                padding: 0;
                grid-area: list;
            }
            .careers-values-why li {
                list-style-type: none;
            }
            .careers-values-why ul li + li {
                margin-top: 21px;
            }

            .careers-values-title {
                grid-area: title;
                font-size: 28px;
                font-weight: 900;
                letter-spacing: 0.4px;
                margin-bottom: 44px;
                max-width: 480px;
                padding: 0;
                align-self: end;
            }

            .careers-values-image {
                grid-area: image;
                margin: 0;
            }

            .careers-info-item.-smi {
                padding: clamp(3rem, 1rem + 5vw, 5.5rem) 0 0;
            }

            .careers-info-item.-smi {
                padding: 5.5rem 0 0;
            }

            .careers-info-item.-smi .careers-subtitle {
                display: block;
                margin-bottom: 3rem;
            }

            .careers-smi-list {
                margin: 0;
                padding: 0;
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                grid-gap: 22px;
            }

            .careers-smi-item {
                list-style-type: none;
                height: 100%;
            }

            .careers-smi-card {
                line-height: 1.375;
                border-radius: 5px;
                background: #fff;
                box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.05);
                font-size: 15px;
                overflow: hidden;
                position: relative;
                padding: 0 0 75px 0;
                height: 100%;
            }

            .careers-smi-image {
                height: 220px;
                overflow: hidden;
                margin: 0;
            }

            .careers-smi-title {
                font-size: 20px;
                line-height: 1.15;
                text-decoration: none;
                color: #484848;
                transition-timing-function: linear;
                transition-duration: 0.3s;
                transition-property: color, background, opacity, border, visibility,
                box-shadow;
                font-weight: 500;
                padding: 15px;
                max-height: 83px;
                -webkit-line-clamp: 3;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                overflow: hidden;
                margin: 0;
            }

            .careers-smi-text {
                color: #484848;
                font-size: 15px;
                margin-bottom: 0;
                padding: 15px 15px 0;
            }

            .careers-smi-link a {
                display: inline-block;
                padding-bottom: 2px;
                vertical-align: top;
                text-decoration: none;
                color: #61c13a;
                border-bottom: 2px solid #61c13a;
                font-weight: 500;
                font-size: 14px;
                margin: 0 15px;
                position: absolute;
                bottom: 20px;
            }

            .careers-smi-link a:hover {
                border-bottom: 2px solid transparent;
            }

            .careers-footer {
                background-image: url("/img/career/career-photo-5.jpg");
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                margin: 5rem 0 -3rem;
            }
            .careers-footer .container {
                overflow: hidden;
            }
            .careers-footer-content {
                display: flex;
                flex-direction: column;
                justify-content: center;
                gap: 30px;
                margin: clamp(1.875rem, -1.6250000000000004rem + 8.75vw, 6.25rem) 0;
                float: right;
                width: 500px;
                max-width: 500px;
            }

            .careers-footer-text {
                color: #fff;
                background: rgb(128, 210, 23);
                background: -moz-linear-gradient(
                        90deg,
                        rgba(128, 210, 23, 1) 0%,
                        rgba(1, 192, 0, 1) 100%
                );
                background: -webkit-linear-gradient(
                        90deg,
                        rgba(128, 210, 23, 1) 0%,
                        rgba(1, 192, 0, 1) 100%
                );
                background: linear-gradient(
                        90deg,
                        rgba(128, 210, 23, 1) 0%,
                        rgba(1, 192, 0, 1) 100%
                );
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#80d217",endColorstr="#01c000",GradientType=1);
                font-size: 1.5rem;
                font-size: clamp(1.5rem, 0.9rem + 1.5vw, 2.25rem);
                padding: 18px 34px;
                border-radius: 10px;
                font-weight: 100;
                line-height: 1.3;
            }

            .careers-footer-text b{
                font-weight: 900;
            }

            .careers-footer-button,
            .careers-footer-button:hover {
                display: inline-flex;
                align-items: center;
                background-color: #fff;
                color: #030602;
                padding: 10px 21px 10px 10px;
                gap: 21px;
                border-radius: 25px;
                box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.1);
                letter-spacing: -0.4px;
                text-decoration: none;
                align-self: baseline;
            }

            .careers-footer-button b {
                overflow: hidden;
            }

            .careers-footer-button b img {
                max-width: 24px;
                max-height: 24px;
            }

            .careers-footer-logo {
                transform: scale(1.35);
            }

            .careers-beliefs{
                background-image: url('/img/career/careers-beliefs-bg.svg');
                background-repeat: no-repeat;
                background-position: center top;
                background-size: cover;
                padding: clamp(4.5625rem, 3.5625rem + 3.4vw, 6.5625rem) 0;
            }

            .careers-beliefs-content{
                display: grid;
                grid-template-columns: 56% 3.8% 43px 27.2% 17.8%;
                grid-template-rows: 57% 1rem 217px;
            }

            .careers-beliefs-text{
                grid-column: 1 / 2;
                grid-row: 1 / 4;
                align-self: center;
                margin-top: -40px;
            }

            .careers-beliefs-title{
                padding: 0;
                font-weight: 900;
                font-size: clamp(1.9375rem, 1.5rem + 1.46vw, 2.8125rem);
                margin-bottom: 36px;
            }

            .careers-beliefs-text p{
                font-size: clamp(0.9375rem, 0.71875rem + 0.7vw, 1.375rem);
                line-height: 1.7;
            }

            .careers-beliefs-image.-first,
            .careers-beliefs-image.-two{
                border-radius: 1rem;
            }

            .careers-beliefs-image.-first{
                grid-column: 4 / 6;
                grid-row: 1 / 3;
            }
            .careers-beliefs-image.-two{
                grid-column: 3 / 5;
                grid-row: 2 / 4;
            }

            .careers-advantages{
                background-image: url('/img/career/careers-advantages-bg.svg');
                background-repeat: no-repeat;
                background-position: center top 60%;
                background-size: 110%;
                padding: clamp(2rem, -0.59375rem + 8.645833333333334vw, 7.1875rem) 0 clamp(1.875rem, 1.5625rem + 1vw, 2.5rem);
            }


            .careers-advantages-wrapper{
                display: grid;
                grid-template-columns: clamp(1.875rem, 1.0625rem + 2.7vw, 3.5rem) clamp(18.75rem, 14.53125rem + 14.0625vw, 27.1875rem) clamp(1.875rem, -1.3125rem + 10.625vw, 8.25rem) 1fr;
                grid-template-rows: 108px 275px 55px 230px 63px 226px auto;
            }

            .careers-advantages-image{
                object-fit: cover;
                height: 100%;
                border-radius: 1rem;
            }

            .careers-advantages-image.-first{
                grid-column: 1 / 3;
                grid-row: 2 / 4;
            }

            .careers-advantages-image.-two{
                grid-column: 1 / 3;
                grid-row: 3 / 6;
                align-self: center;
                transform: scale(1.4) translateY(6px);
                position: relative;
                z-index: 1;
            }

            .careers-advantages-image.-three{
                grid-column: 2 / 3;
                grid-row: 5 / 7;
            }

            .careers-advantages-content{
                grid-column: 4 / 5;
                grid-row: 1 / 8;
            }

            .careers-advantages-title{
                padding: 0;
                font-weight: 900;
                font-size: clamp(1.9375rem, 1.5rem + 1.46vw, 2.8125rem);
                margin-bottom: clamp(1.5625rem, 1.21875rem + 1.15vw, 2.25rem);
            }


            .careers-advantages-subtitle{
                font-size: clamp(0.9375rem, 0.71875rem + 0.73vw, 1.375rem);
                margin-bottom: clamp(3.125rem, 2.4375rem + 2.3vw, 4.5rem);
                line-height: 1.7;
            }

            @media(min-width: 1600px){
                .careers-advantages-subtitle{
                    min-width: 700px;
                }
            }

            .careers-advantages-list h3{
                font-weight: 900;
                font-size: clamp(0.9375rem, 0.71875rem + 0.73vw, 1.375rem);
                margin-bottom: clamp(0.9375rem, 0.78125rem + 0.52vw, 1.25rem);
                padding-left: 4px;
            }

            .careers-advantages-list ul{
                padding-left: clamp(1rem, 0.6875rem + 1.04vw, 1.625rem);
                margin-bottom: clamp(2rem, 1.3125rem + 2.29vw, 3.375rem);
            }

            .careers-advantages-list li{
                max-width: 580px;
                font-size: clamp(0.9375rem, 0.71875rem + 0.73vw, 1.375rem);
                line-height: 1.7;
                list-style-type: disc;
                list-style-position: outside;
                margin-bottom: 4px;
            }

            .careers-makenew{
                padding: clamp(2.5rem, -1.25rem + 12.5vw, 10rem) 0;
            }

            .careers-makenew-content{
                display: grid;
                grid-template-columns: max(420px) auto auto;
                grid-template-rows: auto auto auto;
                grid-template-areas: 'title video list' 'text video list' 'industry video list';
                align-items: center;
            }

            .careers-makenew-content h2{
                grid-area: title;
                padding: 0;
                font-weight: 900;
                font-size: clamp(1.9375rem, 1.5rem + 1.46vw, 2.8125rem);
                margin-bottom: 0;
                align-self: end;
            }

            .careers-makenew-content p{
                grid-area: text;
                font-size: clamp(0.9375rem, 0.71875rem + 0.73vw, 1.375rem);
                margin-bottom: 0;
                line-height: 1.7;
                align-self: center;
                transform: translateY(34px);
            }

            .careers-makenew-content .careers-makenew-industries{
                grid-area: industry;
                margin: 1rem 0 0;
                padding: 0px;
            }

            .careers-makenew-content .careers-makenew-industries li{
                font-weight: 900;
                font-size: clamp(0.9375rem, 0.71875rem + 0.73vw, 1.375rem);
                margin: 0;
                padding: 0;
                color: #01d101;
            }

            .careers-makenew-content video{
                grid-area: video;
                max-width: clamp(13.125rem, 10.3125rem + 9.375vw, 18.75rem);
                margin-bottom: 0;
                transform: scale(1.15) translate(90px, 14px);
            }

            .careers-makenew-nums{
                grid-area: list;
                padding-left: clamp(6.5625rem, 5.15625rem + 4.6875vw, 9.375rem);
                padding-top: clamp(2.8125rem, 2.1875rem + 2.1vw, 4.0625rem);
                margin: 0;
                align-self: center;
            }

            .careers-makenew-nums li{
                list-style-type: none;
                margin: 0;
                font-size: 0.9375rem;
                font-size: clamp(0.9375rem, 0.71875rem + 0.73vw, 1.375rem);
            }
            .careers-makenew-nums li + li{
                margin-top: 4rem;
            }

            .careers-makenew-nums li b{
                color: #01d101;
                font-size: 2.5rem;
                font-size: clamp(2.5rem, 0.625rem + 6.25vw, 6.25rem);
                display: block;
                font-weight: 900;
                line-height: 1;
                transform: translateY(-5px);
            }

            .careers-innovation{
                position: relative;
                padding: clamp(2.5rem, -0.3125rem + 9.375vw, 8.125rem) 0 0;
                margin-top: calc(-1 * clamp(2.5rem, -0.3125rem + 9.375vw, 8.125rem));
            }

            .careers-innovation:after{
                content: '';
                display: block;
                width: 100%;
                height: 100%;
                background-image: url('/img/career/careers-innovation-bg.svg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center bottom;
                position: absolute;
                top: calc(-1 * clamp(3rem, -1rem + 13.3333vw, 11rem));
                left: 0;
                right: 0;
            }

            .careers-innovation-gradient{
                position: relative;
                z-index: 1;
                background-image: url('/img/career/bg-2.png');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                padding: clamp(1.875rem, -2.5rem + 14.5833vw, 10.625rem) 0;
            }

            .careers-innovation-content{
                display: flex;
                gap: clamp(1.875rem, -1.25rem + 10.4167vw, 8.125rem);
                align-items: center;
            }

            .careers-innovation-image{
                position: relative;
                margin: 0;
            }

            .careers-innovation-image:before{
                content: '';
                display: block;
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: clamp(1.875rem, -3.1875rem + 16.875vw, 12rem);
                background-image: url('/img/career/careers-innovation-icons.svg');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: contain;
                transform: scale(1.5);
            }

            .careers-innovation-image img{
                border-radius: 1rem;
            }

            .careers-innovation-text{
                min-width: clamp(18.75rem, 15rem + 12.5vw, 26.25rem);
            }

            .careers-innovation-text h2{
                font-weight: 900;
                font-size: clamp(1.9375rem, 1.5rem + 1.46vw, 2.8125rem);
                margin-bottom: clamp(1.875rem, 1.25rem + 2.0833vw, 3.125rem);
                padding: 0;
            }

            .careers-innovation-text p{
                font-size: clamp(0.9375rem, 0.71875rem + 0.73vw, 1.375rem);
                margin-bottom: 0;
                line-height: 1.7;
                min-width: 500px;
            }

            .careers-innovation-text p + p{
                margin-top: clamp(1.875rem, 1.5rem + 1.25vw, 2.625rem);
            }

            .careers-joinus{
                padding: 100px 0;
            }

            .careers-joinus-content{
                display: grid;
                grid-template-columns: 1fr auto;
                grid-gap: 10px;
            }

            .careers-joinus-content h2{
                font-weight: 900;
                font-size: clamp(1.9375rem, 1.5rem + 1.46vw, 2.8125rem);
                margin-bottom: clamp(1.5rem, 1.125rem + 1.25vw, 2.25rem);
                padding: 0;
            }

            .careers-joinus-content h2 span{
                color: red;
                margin: 0 10px;
            }
            .careers-joinus-content p{
                font-size: clamp(0.9375rem, 0.71875rem + 0.73vw, 1.375rem);
                margin-bottom: 0;
                line-height: 1.7;
                min-width: clamp(18.75rem, 12.5rem + 20.8333vw, 31.25rem);
            }

            .careers-joinus-button,
            .careers-joinus-button:hover{
                background-color: #60c338;
                color: #fff;
                font-weight: 900;
                padding: clamp(0.625rem, 0.4375rem + 0.625vw, 1rem) clamp(1.6rem, 1rem + 2vw, 2.8rem);
                text-decoration: none;
                position: relative;
                margin-top: clamp(0rem, -1.5rem + 5vw, 3rem);
                display: inline-flex;
                font-size: clamp(1.25rem, 1.0625rem + 0.625vw, 1.625rem);
                letter-spacing: 1px;
                border-radius: 10px;
                transform: translateX(clamp(0rem, -1.8125rem + 6.0417vw, 3.625rem));
            }


            .careers-joinus-button:after{
                content: '';
                display: block;
                position: absolute;
                width: clamp(3.125rem, 2.1875rem + 3.125vw, 5rem);
                height: clamp(5rem, 3.75rem + 4.1667vw, 7.5rem);
                background-image: url('/img/career/button-finger.svg');
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center center;
                top: 48%;
                left: 37%;
                transition: top 0.3s;
            }

            .careers-joinus-button:hover:after{
                top: 30%;
            }


            .careers-gallery{
                text-align: center;
            }

            .careers-gallery-item figure{
                position: relative;
                margin: 0;
                aspect-ratio: 20 / 11;
                overflow: hidden;
                outline: 1px solid #fff;
            }
            .careers-gallery-item figure img{
                position: absolute;
                width: 100%;
                height: 100%;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                object-fit: cover;
            }

            .careers-gallery-footer{
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: clamp(1.25rem, 0.625rem + 2.0833vw, 2.5rem);
                margin: 0 auto;
                padding: clamp(1.25rem, 1rem + 0.8333vw, 1.75rem) 0;
            }


            .careers-gallery-pagination.swiper-pagination-bullets{
                display: inline-flex;
                width: auto;
            }

            .careers-gallery-pagination.swiper-pagination-bullets .swiper-pagination-bullet{
                width: 14px;
                height: 14px;
            }
            .careers-gallery-pagination.swiper-pagination-bullets .swiper-pagination-bullet-active{
                background: #5fc03b;
            }

            .careers-gallery-prev svg,
            .careers-gallery-next svg{
                width: 50px;
                height: 50px;
                cursor: pointer;
            }

            .careers-gallery-prev path,
            .careers-gallery-next path{
                fill: #d9d9d8;
                transition: fill 0.3s;
            }

            .careers-gallery-prev:hover path,
            .careers-gallery-next:hover path{
                fill: #60c338;
            }



            /*
	============================

	MEDIA QUERIES

	============================
	*/

            @media (max-width: 1600px) {
                .only-desktop{
                    display: none;
                }
            }


            @media (max-width: 1500px) {

                .careers-description {
                    grid-template-columns: 1fr;
                    grid-template-rows: auto auto auto;
                    grid-template-areas: "logo" "title" "content";
                }

                .careers-description-title{
                    padding: 0;
                }

                .careers-description-content p{
                    white-space: initial;
                }

                .careers-goals-list {
                    flex-flow: row wrap;
                }

                .careers-cards-items p br {
                    display: none;
                }
            }



            @media (max-width: 1200px) {

                .careers-intro{
                    padding-top: 2rem;
                }

                .careers-intro-image img {
                    transform: scale(1.32) translate(17px, 30px);
                }

                .careers-advantages-text {
                    font-size: 14px;
                    line-height: 1.2;
                }
                .careers-info-item.-goals .careers-subtitle {
                    left: 4.3rem;
                }
                .careers-advantages-shorttext p br {
                    display: none;
                }

                .careers-beliefs-content{
                    display: grid;
                    grid-template-columns: 4fr 2rem 2fr 1rem 3fr;
                    grid-template-rows: 1fr 1rem auto;
                }

                .careers-advantages-wrapper {
                    display: grid;
                    grid-template-columns: 1rem 300px 2rem 1fr;
                    grid-template-rows: auto auto auto auto auto auto auto;
                }

                .careers-advantages-image.-first{
                    grid-row: 1 / 3;
                }
                .careers-advantages-image.-two{
                    transform: none;
                    grid-row: 3 / 4;
                }
                .careers-advantages-image.-three{
                    grid-column: 1 / 3;
                    grid-row: 4 / 7;
                }
                .careers-makenew-content{
                    grid-template-columns: max(320px) auto auto;
                }

                .careers-makenew-content p {
                    transform: translateY(0px);
                }

                .careers-makenew-content video {
                    margin-bottom: 0;
                    transform: scale(1) translate(80px, 14px);
                }
            }

            @media (max-width: 993px) {
                .careers-intro {
                    grid-template-columns: 1fr;
                    grid-template-rows: auto auto auto auto;
                    grid-template-areas: "subtitle" "title" "footer" "image";
                }

                .careers-intro-image img {
                    transform: scale(1) translate(0, 50px);
                }



                .careers-advantages-row.-first {
                    grid-template-columns: 1fr;
                    grid-template-rows: auto auto auto;
                    grid-template-areas:
				"title"
				"shorttext"
				"pics";
                }
                .careers-advantages-pics {
                    transform: translateY(0px);
                    display: flex;
                    flex-flow: row-reverse;
                    justify-content: flex-end;
                    gap: 1.2rem;
                }
                .careers-advantages-pics > img {
                    position: static;
                    width: 40% !important;
                    object-fit: cover;
                }

                .careers-description-content p br {
                    display: none;
                }

                .careers-advantages-items {
                    columns: 1;
                    transform: translate(0, 0);
                    margin: 0;
                }

                .careers-col-item {
                    display: block;
                }
                .careers-col-item + .careers-col-item {
                    margin-top: 2rem;
                }

                .careers-advantages-text {
                    transform: translateY(4px);
                }

                .careers-info-item.-goals .careers-subtitle {
                    left: 1.3rem;
                }
                .careers-smi-list {
                    grid-template-columns: 1fr;
                    grid-template-rows: auto auto auto;
                }
                .careers-intro-title {
                    padding-top: 1.8rem;
                }
                .careers-intro-footer {
                    transform: translateY(2rem);
                }
                .careers-description {
                    grid-row-gap: 2rem;
                }

                .careers-beliefs-content{
                    display: grid;
                    grid-template-columns: 3fr 2rem 2fr;
                    grid-template-rows: auto 2rem 3fr 2rem 2fr;
                }

                .careers-beliefs-text {
                    grid-column: 1 / 4;
                    grid-row: 1 / 2;
                    align-self: baseline;
                    margin-top: 0px;
                }
                .careers-beliefs-image.-first {
                    grid-column: 1 / 3;
                    grid-row: 3 / 5;
                }
                .careers-beliefs-image.-two {
                    grid-column: 2 / 4;
                    grid-row: 4 / 6;
                }

                .careers-makenew-content ul{
                    padding-left: 0;
                }

                .careers-makenew-content video {
                    transform: scale(1) translate(30px, 14px);
                }

                .careers-innovation-content{
                    flex-direction: column;
                }
                .careers-innovation-text {
                    min-width: 100%;
                }
                .careers-innovation-text p {
                    min-width: 100%;
                }

                .careers-joinus-content{
                    grid-template-columns: 1fr;
                    grid-template-rows: auto auto;
                    grid-gap: 1rem;
                }

                .careers-joinus-button,
                .careers-joinus-button:hover{
                    transform: translateX(0);
                }
                .careers-advantages-image{
                    max-height: 30vw;
                }

            }

            @media (max-width: 830px) {
                .careers-makenew-content {
                    grid-template-columns: auto auto;
                    grid-template-rows: auto auto auto auto;
                    grid-template-areas:
		        'title title'
		        'text text'
		        'industry video'
		        'list video';
                    align-items: center;
                }
                .careers-makenew-content h2{
                    margin-bottom: 2rem;
                }
                .careers-makenew-content ul{
                    padding-top: 2rem;
                }
                .careers-makenew-content video {
                    transform: scale(1) translate(0px, 14px);
                }
                .careers-makenew-content li + li {
                    margin-top: 1.5rem;
                }
            }

            @media (max-width: 769px) {
                .careers-info-item.-goals .careers-subtitle {
                    left: 0;
                    margin-bottom: 3rem;
                    display: block;
                }
                .careers-goals-list {
                    flex-direction: column;
                }
                .careers-goals-card:after {
                    display: none;
                }
                .careers-goals-card span {
                    display: inline;
                    position: static;
                }
                .careers-goals-card span br {
                    display: none;
                }
                .careers-goals-card {
                    width: 100%;
                    height: auto;
                }
                .careers-values-list {
                    grid-template-columns: 1fr;
                    grid-template-rows: auto auto auto auto auto;
                    grid-template-areas: "one" "two" "three" "for" "five";
                }
                .careers-values-item:nth-child(2),
                .careers-values-item:nth-child(5) {
                    transform: none;
                }
                .careers-values-why {
                    grid-template-columns: 1fr;
                    grid-template-rows: auto auto auto;
                    grid-template-areas: "title" "list" "image";
                }
                .careers-smi-image {
                    height: auto;
                }
                .careers-smi-image img {
                    width: 100%;
                }
                .careers-advantages-shorttext {
                    margin-bottom: 2.5rem;
                }
                .careers-advantages-title {
                    margin-bottom: 2rem;
                }
                .careers-goals-card:before {
                    position: relative;
                }

                .careers-footer-logo {
                }
                .careers-footer-content {
                    width: 100%;
                    max-width: 100%;
                    float: none;
                }
                .careers-smi-title {
                    margin-top: 1rem !important;
                }

                .careers-advantages-wrapper {
                    display: grid;
                    grid-template-columns: 1fr 2rem 1fr;
                    grid-template-rows: auto auto auto auto auto;
                }

                .careers-advantages-content{
                    grid-column: 1 / 4;
                    grid-row: 2 / 3;
                }

                .careers-advantages-image.-first{
                    grid-column: 1 / 2;
                    grid-row: 3 / 4;
                }

                .careers-advantages-image.-two{
                    grid-column: 1 / 2;
                    grid-row: 4 / 5;
                    display: none;
                }

                .careers-advantages-image.-three{
                    grid-column: 3 / 4;
                    grid-row: 3 / 4;
                }

            }

            @media(max-width: 440px){
                .careers-makenew-content {
                    grid-template-columns: auto auto;
                    grid-template-rows: auto auto auto auto;
                    grid-template-areas:
        'title'
        'text'
        'industry'
        'list'
        'video';
                    align-items: center;
                }
                .careers-makenew-content video {
                    transform: scale(1) translate(-36px, 16px);
                }
            }

            .container.mainc ~ .videos,
            .container.mainc ~ .section,
            .free-test {
                display: none;
            }

            .careers-footer {
                margin: 0;
            }

            @media (max-width: 577px) {
                .careers-description-wrapper {
                    padding-left: 0;
                    padding-right: 0;
                }
                .careers-advantages-pics {
                    flex-flow: column-reverse;
                    justify-content: flex-end;
                    gap: 2rem;
                }
                .careers-advantages-pics > img {
                    width: 100% !important;
                }
            }
        </style>

        <section class="careers-intro-wrapper">
            <img class="careers-intro-bg" src="/img/career/intro-bg.png">
            <div class="container">
                <div class="careers-intro">
                    <strong class="careers-subtitle">Happy Job — аккредитованная ит-компания.</strong>
                    <h1 class="careers-intro-title">
                        Мы — №1 в разработке<br class="only-desktop">
                        ИТ-решений для развития<br class="only-desktop">
                        вовлеченности персонала
                    </h1>
                    <div class="careers-intro-footer">
                        <a href="https://hh.ru/employer/3351988" class="careers-intro-button">
                            <span>Присоединяйся к команде профессионалов</span>
                            <b class="button-arrow"></b>
                        </a>
                    </div>
                    <figure class="careers-intro-image">
                        <img src="/img/career/empl.png">
                    </figure>
                </div>
            </div>
        </section>

        <section class="careers-description-wrapper">
            <div class="container">
                <div class="careers-description">
                    <div class="careers-description-logo">
                        <img src="/img/happy-job/images/logo.svg">
                    </div>
                    <h2 class="careers-description-title">Мы — команда!</h2>
                    <div class="careers-description-content">
                        <p>
                            Каждый день Happy Job помогает сотрудникам <br class="only-desktop">
                            по всей стране. Условия и комфорт труда требуют <br class="only-desktop">
                            непрерывного развития. Миллионы сотрудников <br class="only-desktop">
                            нуждаются в нас, а мы нуждаемся в тебе.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="careers-beliefs">
            <div class="container">
                <div class="careers-beliefs-content">
                    <div class="careers-beliefs-text">
                        <h2 class="careers-beliefs-title">
                            Наши твердые
                            <br class="only-desktop">
                            убеждения
                        </h2>
                        <p>
                            Мы спокойные, трудолюбивые, дружелюбные, <br class="only-desktop">
                            честные и предприимчивые люди. И мы считаем, <br class="only-desktop">
                            что соблюдение этих ценностей делает нашу <br class="only-desktop">
                            компанию лучшим местом для работы.
                        </p>
                    </div>

                    <img class="careers-beliefs-image -first" src="/img/career/career-photo-1.jpg" alt="">
                    <img class="careers-beliefs-image -two" src="/img/career/career-photo-2.jpg" alt="">
                </div>
            </div>
        </section>

        <section class="careers-advantages">
            <div class="container">
                <div class="careers-advantages-wrapper">
                    <img class="careers-advantages-image -first" src="/img/career/career-photo-3.jpg" alt="">
                    <img class="careers-advantages-image -two" src="/img/career/careers-advantages-icons.svg" alt="">
                    <img class="careers-advantages-image -three" src="/img/career/career-photo-4.jpg" alt="">
                    <div class="careers-advantages-content">
                        <h2 class="careers-advantages-title">
                            Почему стоит
                            <br class="only-desktop">
                            работать с нами?
                        </h2>

                        <p class="careers-advantages-subtitle">
                            Чтобы заботиться о комфорте сотрудников по всей стране, <br class="only-desktop">
                            мы начинаем с заботы о собственных.
                        </p>

                        <div class="careers-advantages-list">
                            <h3>Лучшая в своем классе компенсация</h3>
                            <ul>
                                <li>Конкурентоспособная заработная плата</li>
                                <li>Ежегодные премии за результативность</li>
                                <li>Специальные бонусы</li>
                                <li>Работайте из офиса или дома, как вам удобно</li>
                                <li>Наслаждайтесь по-настоящему гибкой политикой отпуска</li>
                            </ul>
                            <h3>Здоровый баланс между работой и личной жизнью</h3>
                            <ul>
                                <li>Групповое страхование для вас и ваших близких</li>
                                <li>Пособие на здоровье и хорошее самочувствие.</li>
                                <li>Финансовая поддержка молодых родителей</li>
                                <li>Множество способов расширить свой кругозор</li>
                                <li>Обучение и конференции</li>
                                <li>Языковые курсы</li>
                            </ul>
                            <h3>Вишенка на торте</h3>
                            <ul>
                                <li>Пособие для домашнего офиса</li>
                                <li>Компенсация за Интернет</li>
                                <li>Крутой офис в Москве для работы с классными коллегами.</li>
                                <li>Оплачиваемые обеды в офисе</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="careers-footer">
            <div class="container">
                <div class="careers-footer-content">
                    <img src="/img/career/footer-logo.svg" class="careers-footer-logo">
                    <div class="careers-footer-text">
                        Каждый должен быть <b>счастлив</b> на работе
                    </div>

                    <a href="https://hh.ru/employer/3351988" class="careers-footer-button">
                        <b><img src="/img/career/hh.ru__min_.svg" alt=""></b>
                        <span>Смотреть список вакансий</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="careers-makenew">
            <div class="container">
                <div class="careers-makenew-content">
                    <h2>
                        Создавай новое <br class="only-desktop">
                        в Happy Job!
                    </h2>
                    <p>
                        Каждый день к платформе <br class="only-desktop">
                        подключаются новые клиенты, ведь <br class="only-desktop">
                        мы сделали интересные опросы для <br class="only-desktop">
                        сотрудников из отрасли. <br class="only-desktop">
                    </p>
                    <ul class="careers-makenew-industries">
                        <li data-item="it" class="careers-makenew-industries-item">IT. E-commerce. Телеком</li>
                        <li data-item="transport" class="careers-makenew-industries-item" hidden>Логистика и транспорт</li>
                        <li data-item="retail" class="careers-makenew-industries-item" hidden>Retail food & non food</li>
                        <li data-item="development" class="careers-makenew-industries-item" hidden>Девелопмент и строительство</li>
                        <li data-item="farma" class="careers-makenew-industries-item" hidden>Фарма и медицина</li>
                        <li data-item="insurance" class="careers-makenew-industries-item" hidden>Банки и страховые</li>
                        <li data-item="education" class="careers-makenew-industries-item" hidden>Образование и наука</li>
                        <li data-item="manufacture" class="careers-makenew-industries-item" hidden>Производство</li>
                        <li data-item="profy" class="careers-makenew-industries-item" hidden>Профессиональные услуги</li>
                        <li data-item="metall" class="careers-makenew-industries-item" hidden>Металлургия и энергетика</li>
                    </ul>

                    <video id="charvideo" playsinline="" loop="" muted="" class="playing" autoplay="">
                        <source data-src="/videos/charvideo_s.mp4" type="video/mp4" src="/videos/charvideo_s.mp4">
                        <source data-src="/videos/charvideo_s.webm" type="video/webm" src="/videos/charvideo_s.webm">
                    </video>
                    <ul class="careers-makenew-nums">
                        <li><b>800+</b> компаний</li>
                        <li><b>32</b> отрасли</li>
                    </ul>
                </div>
            </div>
        </section>

        <script>
            document.addEventListener("DOMContentLoaded", function(event) {
                'use strict';
                if($(window).width() > 0){
                    playcharvideo();
                }
                $(window).resize(function(){
                    if($(window).width() > 0 && !$('#charvideo').hasClass('playing')){
                        playcharvideo();
                    }
                });
                function playcharvideo(){
                    $('#charvideo source').each(function(){
                        $(this).attr('src',$(this).data('src'));
                    });
                    $('#charvideo').addClass('playing');
                    var video_industries = document.getElementById('charvideo')
                    video_industries.autoplay = false
                    video_industries.load()
                    video_industries.autoplay = true

                    var approxTime = 0
                    video_industries.ontimeupdate = function () {
                        var currentTime = video_industries.currentTime.toFixed(2);
                        if (currentTime !== approxTime) {
                            video_industries.autoplay = true
                            video_industries.play()
                            const hideHeadings = () => {
                                let headings = document.querySelectorAll('.careers-makenew-industries-item')
                                let headings_arr = [...headings]
                                headings_arr.forEach(item => {
                                    item.hidden = true
                                })
                            }

                            approxTime = currentTime
                            if(approxTime >= 0 && approxTime < 2.5) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="it"]')[0].hidden = false;
                            }
                            else if (approxTime >= 2.5 && approxTime < 5) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="transport"]')[0].hidden = false;
                            }
                            else if (approxTime >= 5 && approxTime < 8) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="retail"]')[0].hidden = false;
                            }
                            else if (approxTime >= 8 && approxTime < 10.5) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="development"]')[0].hidden = false;
                            }
                            else if (approxTime >= 10.5 && approxTime < 13.50) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="farma"]')[0].hidden = false;
                                console.log('[data-item="farma"]')
                            }
                            else if (approxTime >= 13.5 && approxTime < 14.75) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="insurance"]')[0].hidden = false;
                            }
                            else if (approxTime >= 14.75 && approxTime < 16) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="education"]')[0].hidden = false;
                            }
                            else if (approxTime >= 16 && approxTime < 19) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="manufacture"]')[0].hidden = false;
                            }
                            else if (approxTime >= 19 && approxTime < 22) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="profy"]')[0].hidden = false;
                            }
                            else if (approxTime >= 22 && approxTime < 25) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="metall"]')[0].hidden = false;
                            }
                            else if (approxTime >= 25 && approxTime < 27.24) {
                                hideHeadings()
                                document.querySelectorAll('[data-item="farma"]')[0].hidden = false;
                            }
                        }
                    };
                }
            })
        </script>


        <section class="careers-innovation">
            <div class="careers-innovation-gradient">
                <div class="container">
                    <div class="careers-innovation-content">
                        <figure class="careers-innovation-image">
                            <img src="/img/career/innovation-img.jpg" alt="">
                        </figure>
                        <div class="careers-innovation-text">
                            <h2>
                                Будущий опыт <br class="only-desktop">
                                сотрудников <br class="only-desktop">
                                начинается здесь
                            </h2>
                            <p>
                                Наша лаборатория инноваций — это <br class="only-desktop">
                                место, где мы расширяем границы и <br class="only-desktop">
                                создаем новые продукты с нуля.
                            </p>
                            <p>
                                Компания состоит из новаторов, <br class="only-desktop">
                                одержимых одним: созданием следующего <br class="only-desktop">
                                ведущего продукта, который сделает <br class="only-desktop">
                                работу проще, добрее и быстрее.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="careers-gallery">
            <div class="careers-gallery-content swiper">
                <div class="careers-gallery-slider swiper-wrapper">
                    <div class="careers-gallery-item swiper-slide">
                        <figure>
                            <img src="/img/career/gallery/_001.JPG" alt="">
                        </figure>
                    </div>
                    <div class="careers-gallery-item swiper-slide">
                        <figure>
                            <img src="/img/career/gallery/_002.JPG" alt="">
                        </figure>
                    </div>
                    <div class="careers-gallery-item swiper-slide">
                        <figure>
                            <img src="/img/career/gallery/_003.JPG" alt="">
                        </figure>
                    </div>
                    <div class="careers-gallery-item swiper-slide">
                        <figure>
                            <img src="/img/career/gallery/_004.JPG" alt="">
                        </figure>
                    </div>
                    <div class="careers-gallery-item swiper-slide">
                        <figure>
                            <img src="/img/career/gallery/_005.JPG" alt="">
                        </figure>
                    </div>
                    <div class="careers-gallery-item swiper-slide">
                        <figure>
                            <img src="/img/career/gallery/_006.JPG" alt="">
                        </figure>
                    </div>
                    <div class="careers-gallery-item swiper-slide">
                        <figure>
                            <img src="/img/career/gallery/_007.JPG" alt="">
                        </figure>
                    </div>
                    <div class="careers-gallery-item swiper-slide">
                        <figure>
                            <img src="/img/career/gallery/_008.JPG" alt="">
                        </figure>
                    </div>
                    <div class="careers-gallery-item swiper-slide">
                        <figure>
                            <img src="/img/career/gallery/_009.JPG" alt="">
                        </figure>
                    </div>
                    <div class="careers-gallery-item swiper-slide">
                        <figure>
                            <img src="/img/career/gallery/_010.JPG" alt="">
                        </figure>
                    </div>
                    <div class="careers-gallery-item swiper-slide">
                        <figure>
                            <img src="/img/career/gallery/_011.JPG" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="careers-gallery-footer">
                    <div class="careers-gallery-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 24 24"><path d="m7.825 13l4.9 4.9q.3.3.288.7t-.313.7q-.3.275-.7.288t-.7-.288l-6.6-6.6q-.15-.15-.213-.325T4.426 12q0-.2.063-.375T4.7 11.3l6.6-6.6q.275-.275.688-.275t.712.275q.3.3.3.713t-.3.712L7.825 11H19q.425 0 .713.288T20 12q0 .425-.288.713T19 13z"></path></svg>
                    </div>
                    <div class="careers-gallery-pagination"></div>
                    <div class="careers-gallery-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 24 24"><path d="M16.175 13H5q-.425 0-.712-.288T4 12q0-.425.288-.712T5 11h11.175l-4.9-4.9q-.3-.3-.288-.7t.313-.7q.3-.275.7-.288t.7.288l6.6 6.6q.15.15.213.325t.062.375q0 .2-.062.375t-.213.325l-6.6 6.6q-.275.275-.687.275T11.3 19.3q-.3-.3-.3-.712t.3-.713z"></path></svg>
                    </div>
                </div>
            </div>
        </section>

        <script type="module">
            import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'
            const careerGallery = new Swiper('.careers-gallery-content', {
                slidesPerView: 1,
                centeredSlides: true,
                loop: true,
                pagination: {
                    el: '.careers-gallery-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.careers-gallery-next',
                    prevEl: '.careers-gallery-prev',
                },
                breakpoints: {
                    993: {
                        slidesPerView: 2,
                    }
                }
            });

        </script>


        <section class="careers-joinus">
            <div class="container">
                <div class="careers-joinus-content">
                    <div class="careers-joinus-text">
                        <h2>Выбираешь <span>❤</span> работу?</h2>
                        <p>
                            Нам предстоит многое понять, попробовать, совершить <br class="only-desktop">
                            ошибки и отпраздновать успехи. И для этого нам <br class="only-desktop">
                            нужны умные, талантливые и целеустремленные люди. <br class="only-desktop">
                            Мы нуждаемся в тебе!
                        </p>
                    </div>
                    <div>
                        <a href="https://hh.ru/employer/3351988" class="careers-joinus-button">
                            Найди свою вакансию
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

</div>

<!-- endrender about-us/work//-->

<!-- render common/footer-->
<style>
    html.swal2-shown.swal2-height-auto,
    body.swal2-shown.swal2-height-auto {
        overflow: hidden;
    }

    .swal2-shown.swal2-height-auto .header-top,
    .swal2-shown.swal2-height-auto .header-menu-dop {
        padding-right: 1rem;
    }

    .swal2-title {
        display: flex !important;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 0.5rem;
    }
    .modal-title-top {
        font-size: 1.7rem;
        display: flex;
        flex-direction: column;
        margin-top: 1.5rem;
        font-weight: bold;
    }
    .modal-product {
        font-size: 0.7em;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        letter-spacing: 3px;
    }
    .modal-product .modal-description {
        font-size: 0.7em;
        font-weight: normal;
        letter-spacing: 0px;
    }

    .form-input {
        display: block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        margin-bottom: 1rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .swal2-container .swal2-confirm.swal2-styled {
        background: #f4515a;
    }
    .form-label {
        border-top: none;
        text-align: left;
        font-size: 14px;
        padding-bottom: 0.3rem;
    }
    .form-label:before {
        content: attr(title);
    }
    .form-label:not([title='Комментарий:']):after {
        content: '*';
        color: red;
        transform: translateY(-3px);
    }
    .button {
        display: inline-flex;
        font-size: clamp(
                0.8rem,
                0.7142857142857143rem + 0.4285714285714286vw,
                1.1rem
        );
        color: #fff !important;
        background-color: #f4515a;
        padding: 0.6rem 1rem 0.7rem;
        transition: color 0s, background-color 0s ease-in-out,
        border-color 0s ease-in-out, box-shadow 0.15s ease-in-out;
        box-shadow: 0 4px 0 #c63839 !important;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
        line-height: 1;
        max-height: 50px;
        justify-content: center;
        align-items: center;
    }

    .button.-client {
        background-color: #61c13b;
        box-shadow: 0 4px 0 #46882c !important;
    }

    .button.-service {
        background-color: #355fe5;
        box-shadow: 0 4px 0 #213b8e !important;
    }

    .button.-feedbackx {
        background-color: #ffaa00;
        box-shadow: 0 4px 0 #c88600 !important;
        color: #000;
    }

    .button.-survey {
        background-color: #a5a5a5;
        box-shadow: 0 4px 0 #6c6c6c !important;
        color: #000;
    }

    .button:hover {
        background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1));
    }
    .btn.btn-3 + .button {
        transform: translateY(-1rem);
    }
    .b-top-title .button {
        max-width: 190px;
    }
    .swal2-footer .privacy-btn > a[data-href='/privacy-policy/']:first-child,
    .swal2-footer a[href='mailto:sales@happy-job.ru'] {
        color: var(--c-link) !important;
    }

    .swal2-footer {
        text-align: center;
        font-size: 14px !important;
    }

    .swal2-footer .privacy-btn > a[data-href='/privacy-policy/']:first-child {
        display: inline-flex;
        gap: 0.2rem;
        align-items: center;
        justify-content: center;
        margin-bottom: 2rem;
        cursor: pointer;
        transform: translateY(4px);
    }

    .swal2-footer
    .privacy-btn
    > a[data-href='/privacy-policy/']:first-child:before {
        content: '';
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--material-symbols' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%2361c13a' d='M4 22V8h3V6q0-2.075 1.463-3.538Q9.925 1 12 1t3.538 1.462Q17 3.925 17 6v2h3v14ZM9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6Zm3 9q.825 0 1.413-.587Q14 15.825 14 15q0-.825-.587-1.413Q12.825 13 12 13q-.825 0-1.412.587Q10 14.175 10 15q0 .825.588 1.413Q11.175 17 12 17Z'%3E%3C/path%3E%3C/svg%3E");
        flex-basis: 16px;
        min-width: 16px;
        width: 16px;
        height: 16px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: contain;
        transform: translateY(-2px);
    }

    .swal2-footer a[href='mailto:sales@happy-job.ru'] {
        font-size: 2em;
    }

    .swal2-close {
        box-shadow: none !important;
    }

    .swal2-no-war {
        display: none !important;
        opacity: 0;
    }

    body > footer {
        background-color: #fff;
        padding-top: 0;
    }
    .footer ul {
        margin: 0;
        padding: 0;
    }
    .footer ul li {
        list-style-type: none;
    }
    .footer-main {
        padding: clamp(
                1.25rem,
                0.7142857142857143rem + 2.6785714285714284vw,
                3.125rem
        )
        0;
        background: #d2d7db;
        color: #171717;
        border-top-color: rgba(241, 241, 241, 0.8);
    }

    .footer-main a {
        color: var(--c-text);
        text-decoration: none;
    }
    .footer-main a:hover {
        text-decoration: underline;
    }
    .footer-row {
        display: flex;
        margin: 0 -2rem;
    }
    .footer-col {
        flex: 1;
        padding: 0 2rem;
    }

    .footer-col:nth-child(1) {
        max-width: 200px;
    }
    .footer-col:nth-child(1) li {
        margin: 0 0 21px;
        text-transform: uppercase;
        font-weight: 700;
        line-height: 1;
    }
    .footer-col:nth-child(1) a {
        font-size: 15px;
    }

    .footer-col span {
        font-size: 14px;
        display: block;
        text-transform: uppercase;
        font-weight: 700;
        line-height: 1;
    }
    .footer-col .menu ul {
        padding: 1rem 0 0 0.7rem;
    }
    .footer-col .menu > li {
        margin-bottom: 21px;
    }
    .footer-col .menu ul li {
        position: relative;
        font-weight: 400;
        line-height: 1;
        margin: 0 0 12px;
    }
    .footer-col .menu ul li:before {
        content: '';
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--octicon' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 16 16'%3E%3Cpath fill='%2361c13a' d='m6.427 4.427l3.396 3.396a.25.25 0 0 1 0 .354l-3.396 3.396A.25.25 0 0 1 6 11.396V4.604a.25.25 0 0 1 .427-.177z'%3E%3C/path%3E%3C/svg%3E");
        top: -2px;
        left: -16px;
        position: absolute;
        width: 12px;
        height: 16px;
        background-size: cover;
    }
    .footer-col .menu a {
        font-size: 14px;
    }

    .address {
        position: relative;
        padding-left: 30px;
        margin-top: 21px;
        font-style: normal;
        line-height: 20px;
    }

    .address:before {
        content: '';
        display: block;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%2361c13a' d='M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 0 1 0-5a2.5 2.5 0 0 1 0 5z'%3E%3C/path%3E%3C/svg%3E");
        top: 3px;
        left: 0;
        width: 8px;
        height: 14px;
        position: absolute;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .address p {
        font-size: 14px;
    }

    .address strong {
        padding-right: 5px;
        display: inline-block;
        line-height: 1.1;
        width: 100%;
        padding-top: 3px;
    }

    .address a[href*='tel'],
    .address a[href*='mailto'] {
        color: var(--carnation);
        font-weight: bold;
        display: block;
    }

    .footer-link {
        color: #606367;
        line-height: 1;
        font-size: 14px;
        display: inline-block;
        font-weight: 700;
        list-style: none;
        text-align: center;
        padding: 39px 0px;
    }
    @media (max-width: 992px) {
        .footer-link {
            margin: 0 20px 7px;
        }
    }
    @media (max-width: 576px) {
        .footer-link {
            padding: 20px 0px;
            width: 50%;
            margin: 0 auto;
        }
        .footer-link br {
            display: none;
        }
    }

    .footer-link a {
        display: block;
        color: #606367;
        font-size: 14px;
        text-decoration: none;
        transition: all 0.3s;
        cursor: default;
    }
    .footer-link a[href] {
        cursor: pointer;
    }
    @media (max-width: 576px) {
        .footer-link a {
            display: flex;
            flex-direction: column;
            color: #606367;
            font-size: 14px;
            padding: 0 1rem;
            text-decoration: none;
            transition: all 0.3s;
        }
    }

    .footer-link img {
        height: auto;
        margin: 0 auto 11px;
        max-width: 80px;
    }
    .footer-link a[href]:hover {
        transform: scale(1.1);
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
    }
    .copyright {
        padding: 15px 0;
        position: relative;
        text-align: center;
        display: flex;
        align-items: center;
        float: left;
    }
    .copyright a img {
        width: 120px;
        height: auto;
        margin-right: 19px;
    }
    .copyright p {
        display: inline-block;
        position: relative;
        top: 1px;
        margin: 0;
    }
    .copyright__policy {
        color: var(--c-text);
        margin: 0 0 0 10px;
        text-decoration: none;
        -moz-text-decoration-color: rgb(162, 162, 162);
        -webkit-text-decoration-color: rgb(162, 162, 162);
        text-decoration-color: rgb(162, 162, 162);
        transition: all 0.3s;
    }
    .sitemap {
        text-align: center;
        padding: 15px 0;
        float: right;
    }
    .social {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    @media (max-width: 576px) {
        .social {
            margin-bottom: 4rem;
        }
    }
    .social a {
        display: inline-block;
        padding-right: 13px;
        padding-left: 13px;
        padding-top: 1px;
    }
    .social a i {
        display: inline-block;
        margin: 0px 0px 5px 0;
        padding: 1px 0 0;
        border-radius: 50%;
        overflow: visible;
        box-shadow: 0 0px 1px 0 rgb(0 0 0 / 30%);
        -webkit-transition: all 0.2s ease;
        -moz-transition: all 0.2s ease;
        transition: all 0.2s ease;
        background: #fff;
        border-radius: 100%;
        display: block;
        height: 26px;
        line-height: 26px;
        width: 26px;
        text-align: center;
        color: #333;
        text-decoration: none;
        left: 0;
    }
    .social a:hover i {
        background-color: var(--c-link);
        color: #ffffff;
    }
    .fa-vk:before {
        content: '\f189';
    }
    .fa-telegram:before {
        content: '\f2c6';
    }

    @media (max-width: 992px) {
        .copyright {
            flex-direction: column;
            float: none;
        }
    }

    @media (max-width: 576px) {
        .footer-row {
            flex-direction: column;
        }
    }
    .f-solutions li{
        text-transform: none;
    }

    @media (max-width: 1024px) {
        .footer-row {
            margin: 0 -1rem;
        }
        .footer-col {
            padding: 0 1rem;
        }
    }

</style>


<style>
    .videos {
        box-shadow: inset -2px 4px 17px rgb(0 0 0 / 10%);
    }

    .videos .splide {
        margin-bottom: -2rem;
    }

    .container.mainc ~ .videos {
        margin-top: 3rem;
    }

    .videos-link {
        position: relative;
        display: block;
        padding: 0
        clamp(0.875rem, 0.7678571428571428rem + 0.5357142857142857vw, 1.25rem);
        cursor: pointer;
    }

    .videos-block {
        display: block;
        margin: 0 auto;
        text-align: center;
    }

    .videos-block:after {
        content: "";
        position: absolute;
        height: 227px;
        opacity: 0.7;
        left: 1rem;
        right: 1rem;
        margin: auto;
        transform: scale(1, 0.1);
        z-index: 0;
        top: 1rem;
        background: -moz-radial-gradient(
                center,
                ellipse cover,
                rgba(0, 0, 0, 0.5) 0%,
                rgba(0, 0, 0, 0) 68%,
                rgba(0, 0, 0, 0) 69%
        );
        /* FF3.6-15 */
        background: -webkit-radial-gradient(
                center,
                ellipse cover,
                rgba(0, 0, 0, 0.5) 0%,
                rgba(0, 0, 0, 0) 68%,
                rgba(0, 0, 0, 0) 69%
        );
        /* Chrome10-25,Safari5.1-6 */
        background: radial-gradient(
                ellipse at center,
                rgba(0, 0, 0, 0.5) 0%,
                rgba(0, 0, 0, 0) 68%,
                rgba(0, 0, 0, 0) 69%
        );
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
        /* IE6-9 fallback on horizontal gradient */
    }
    .videos .splide__track {
        padding: 0.5rem 0 0;
    }

    .splide__pagination__page {
        background: #dcdddf;
        display: inline-block;
        width: 16px;
        height: 16px;
        margin: 0 12px;
        opacity: 1;
        transition: transform 0.2s linear;
    }

    .splide__pagination__page.is-active {
        background: #47657d;
    }

    .videos-image-wrapper {
        position: relative;
        height: 130px;
        z-index: 2;
        display: block;
        border-radius: 10px;
        border: 1px solid rgba(0, 0, 0, 0.06);
        overflow: hidden;
        transform: scale(1, 1);
        transition: transform 0.3s;
        background-color: #f4f5f7;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--material-symbols' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%23666666' d='M12 17.5q1.875 0 3.188-1.312Q16.5 14.875 16.5 13q0-1.875-1.312-3.188Q13.875 8.5 12 8.5q-1.875 0-3.188 1.312Q7.5 11.125 7.5 13q0 1.875 1.312 3.188Q10.125 17.5 12 17.5ZM4 21q-.825 0-1.412-.587Q2 19.825 2 19V7q0-.825.588-1.412Q3.175 5 4 5h3.15L9 3h6l1.85 2H20q.825 0 1.413.588Q22 6.175 22 7v12q0 .825-.587 1.413Q20.825 21 20 21Z'%3E%3C/path%3E%3C/svg%3E");
        background-position: center center;
        background-repeat: no-repeat;
    }

    .videos-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .videos-link:hover .videos-image-wrapper {
        transform: scale(1.05, 1.05);
    }

    .videos-play-button {
        position: absolute;
        inset: 0;
        z-index: 3;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        opacity: 0;
    }

    .play-button {
        width: 55px;
        height: 55px;
    }

    .videos-caption {
        position: absolute;
        top: 100%;
        left: 1rem;
        right: 1rem;
        margin: 0;
        padding: clamp(
                0.875rem,
                0.7678571428571428rem + 0.5357142857142857vw,
                1.25rem
        )
        0;
    }

    .videos-heading {
        margin: 0;
        font-weight: normal;
        font-size: 14px;
        letter-spacing: -0.2px;
        line-height: 1.1;
        color: var(--c-text);
    }

    .play-circle {
        width: 100%;
        height: 100%;
        fill: #243642;
        opacity: 0.18;
    }

    .play-circle.white {
        filter: invert(100%);
    }

    .play-triangle {
        width: 100%;
        height: 100%;
        fill: #243642;
        max-width: 50px;
        max-height: 50px;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
    }

    .play-triangle.white {
        filter: invert(100%);
    }


    .single-video-card{
        margin: 0 auto;
    }

    @media (min-width: 1024px) {
        .splide__arrow:disabled {
            display: none;
        }
    }

    .section-footer .slider-footer-arrow {
        display: none;
    }

    @media (max-width: 1200px) {
        .videos-block:after {
            top: 1rem;
        }
    }

    @media (max-width: 800px) {
        .videos .splide__track {
            padding: 0.5rem 0 3rem;
        }
        .videos section.splide {
            /* max-width: 600px; */
            margin: 0 auto;
        }

        .videos-block:after {
            top: 1rem;
        }

        .videos .splide__pagination {
            bottom: 0rem;
        }

        .videos .splide__arrow {
            top: initial;
            bottom: -2rem;
        }
    }


    @media (max-width: 640px) {
        .videos-block:after {
            top: 1.2rem;
        }
        .videos .splide__arrow {
            bottom: -1.4rem;
        }
        .splide__pagination__page {
            width: 12px;
            height: 12px;
            margin: 0 5px;
        }
    }

    @media (max-width: 576px) {
        .splide__arrow {
            width: 2rem;
            height: 2rem;
        }
        .videos section.splide {
            max-width: 100%;
            margin: 0 auto;
        }
        .videos-link {
            padding: 0;
        }
        .videos-image-wrapper {
            height: 170px;
            max-height: 170px;
        }
    }
    .swiper-container {
        width: 100%;
        height: auto;
        margin-left: auto;
        margin-right: auto;
    }
    .webinar-videos-wrapper.swiper-wrapper{
        position: relative;
        display: flex;
        transition-property: transform;
        transition-timing-function: var(--swiper-wrapper-transition-timing-function,initial);
        box-sizing: content-box;
        flex-wrap: wrap;
        flex-direction: column;
        height: 470px;
    }

    .webinar-videos-wrapper.swiper-wrapper .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        height: calc((100% - 30px) / 2) !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .webinar-videos-wrapper.swiper-wrapper .webinar-slide{
        width: 200px;
    }

    .webinar-videos-wrapper.swiper-wrapper .single-video-picture{
        padding: 0 0.5rem;
    }

    .webinar-videos-wrapper.swiper-wrapper img{
        max-width: 100%;
    }

    .webinar-videos .swiper-button-next,
    .webinar-videos .swiper-button-prev{
        width: 54px;
        height: 50px;
        top: initial;
        bottom: 0;
    }
    .webinar-videos .swiper-button-next:after,
    .webinar-videos .swiper-button-prev:after {
        font-family: initial;
        content: '';
        display: block;
        width: 54px;
        height: 50px;
        background-color: transparent;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        transition: background-image 0.3s, left 0.3s, right 0.3s;
    }

    .webinar-videos .swiper-button-next:after {
        background-image: url("data:image/svg+xml, %3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24' fill='%2343677f'%3E%3Cpath d='M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42c.39.39 1.02.39 1.41 0l6.59-6.59a.996.996 0 0 0 0-1.41l-6.58-6.6a.996.996 0 1 0-1.41 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z'%3E%3C/path%3E%3C/svg%3E");
    }

    .webinar-videos .swiper-button-prev:after {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24' fill='%2343677f'%3E%3Cpath d='M19 11H7.83l4.88-4.88c.39-.39.39-1.03 0-1.42a.996.996 0 0 0-1.41 0l-6.59 6.59a.996.996 0 0 0 0 1.41l6.59 6.59a.996.996 0 1 0 1.41-1.41L7.83 13H19c.55 0 1-.45 1-1s-.45-1-1-1z'%3E%3C/path%3E%3C/svg%3E");
    }

    .webinar-videos .swiper-pagination-bullet{
        background: #dcdddf;
        display: inline-block;
        width: 16px;
        height: 16px;
        margin: 0 12px !important;
        opacity: 1;
        transition: transform 0.2s linear;
    }

    .webinar-videos .swiper-pagination-bullet.swiper-pagination-bullet-active{
        background-color: #47657d;
        transform: scale(1.4);
        z-index: 1;
    }

    @media(min-width: 993px){
        .section-footer.webinar-videos-footer{
            padding-top: 0;
        }
    }
    @media(max-width: 993px){
        .webinar-videos-wrapper.swiper-wrapper{
            height: 75vw;
            align-items: baseline;
        }
        .webinar-videos-wrapper.swiper-wrapper .swiper-slide{
            align-items: baseline;
        }
        .webinar-videos-slide .single-video-card{
            max-width: 100%;
            max-height: 100%;
            width: 100%;
        }
    }

    @media(max-width: 577px){
        .webinar-videos-wrapper.swiper-wrapper{
            flex-flow: row;
            height: 67vw;
        }
        .webinar-videos .swiper-pagination-bullet{
            margin: 0 5px !important;
            width: 10px;
            height: 10px;
        }
        .webinar-videos .swiper-button-next,
        .webinar-videos .swiper-button-prev{
            bottom: -5px;
        }
    }


</style>

<section class="videos">
    <header class="section-header">
        <h2 class="section-title">Вебинары и видео</h2>
    </header>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <div class="container">
        <div class="webinar-videos swiper">
            <div class="webinar-videos-wrapper swiper-wrapper">
                <div class="webinar-videos-slide webinar-slide swiper-slide">
                    <div class="single-video-card">
                        <small style="display: none;">2022-11-25</small>
                        <figure class="single-video-picture">
                            <a class="single-video-link" data-fancybox="footer-videos" href="https://vimeo.com/775030996">
                                <img class="single-video-image" src="/img/video/previews/775030996.jpg" alt="Вовлечённость в вовлечённость">
                            </a>
                            <figcaption class="single-video-caption">
                                Вовлечённость в вовлечённость
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="webinar-videos-slide webinar-slide swiper-slide">
                    <div class="single-video-card">
                        <small style="display: none;">2022-08-22</small>
                        <figure class="single-video-picture">
                            <a class="single-video-link" data-fancybox="footer-videos" href="https://vimeo.com/741869709">
                                <img class="single-video-image" src="/img/video/previews/741869709.jpg" alt="Как достичь лучших HR-метрик развивая вовлеченность">
                            </a>
                            <figcaption class="single-video-caption">
                                Как достичь лучших HR-метрик развивая вовлеченность
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="webinar-videos-slide webinar-slide swiper-slide">
                    <div class="single-video-card">
                        <small style="display: none;">2022-05-08</small>
                        <figure class="single-video-picture">
                            <a class="single-video-link" data-fancybox="footer-videos" href="https://vimeo.com/736779306">
                                <img class="single-video-image" src="/img/video/previews/736779306.jpg" alt="Как правильно измерять и развивать лояльность и стать лучшим работодателем">
                            </a>
                            <figcaption class="single-video-caption">
                                Как правильно измерять и развивать лояльность и стать лучшим работодателем
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="webinar-videos-slide webinar-slide swiper-slide">
                    <div class="single-video-card">
                        <small style="display: none;">2021-11-15</small>
                        <figure class="single-video-picture">
                            <a class="single-video-link" data-fancybox="footer-videos" href="https://vimeo.com/646129647">
                                <img class="single-video-image" src="/img/video/previews/646129647.jpg" alt="Елена Блинова о платформе Happy Job">
                            </a>
                            <figcaption class="single-video-caption">
                                Елена Блинова о платформе Happy Job
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="webinar-videos-slide webinar-slide swiper-slide">
                    <div class="single-video-card">
                        <small style="display: none;">2021-09-06</small>
                        <figure class="single-video-picture">
                            <a class="single-video-link" data-fancybox="footer-videos" href="https://vimeo.com/560760387">
                                <img class="single-video-image" src="/img/video/previews/560760387.jpg" alt="Экономическая польза развития вовлеченности">
                            </a>
                            <figcaption class="single-video-caption">
                                Экономическая польза развития вовлеченности
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="webinar-videos-slide webinar-slide swiper-slide">
                    <div class="single-video-card">
                        <small style="display: none;">2021-06-03</small>
                        <figure class="single-video-picture">
                            <a class="single-video-link" data-fancybox="footer-videos" href="https://vimeo.com/558544165">
                                <img class="single-video-image" src="/img/video/previews/558544165.jpg" alt="Экономическая польза оценки лояльности">
                            </a>
                            <figcaption class="single-video-caption">
                                Экономическая польза оценки лояльности
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="webinar-videos-slide webinar-slide swiper-slide">
                    <div class="single-video-card">
                        <small style="display: none;">2021-05-11</small>
                        <figure class="single-video-picture">
                            <a class="single-video-link" data-fancybox="footer-videos" href="https://vimeo.com/547971978">
                                <img class="single-video-image" src="/img/video/previews/547971978.jpg" alt="Максим Потапенко о личном кабинете и конструкторе отчетов">
                            </a>
                            <figcaption class="single-video-caption">
                                Максим Потапенко о личном кабинете и конструкторе отчетов
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="webinar-videos-slide webinar-slide swiper-slide">
                    <div class="single-video-card">
                        <small style="display: none;">2020-09-24</small>
                        <figure class="single-video-picture">
                            <a class="single-video-link" data-fancybox="footer-videos" href="https://vimeo.com/461290977">
                                <img class="single-video-image" src="/img/video/previews/461290977.jpg" alt="Зачем измерять вовлеченность и лояльность?">
                            </a>
                            <figcaption class="single-video-caption">
                                Зачем измерять вовлеченность и лояльность?
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="webinar-videos-pagination swiper-pagination"></div>
            <div class="webinar-videos-button-prev swiper-button-prev"></div>
            <div class="webinar-videos-button-next swiper-button-next"></div>
        </div>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const webinarVideos = new Swiper('.webinar-videos', {
                    slidesPerView: 4,
                    grid: {
                        rows: 2,
                        columns: 4,
                    },
                    slidesPerGroup: 8,
                    allowTouchMove: false,
                    noSwiping: true,
                    noSwipingClass: 'webinar-slide',
                    pagination: {
                        el: '.webinar-videos-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.webinar-videos-button-next',
                        prevEl: '.webinar-videos-button-prev',
                    },
                    breakpoints: {
                        993: {
                            slidesPerView: 4,
                            grid: {
                                rows: 2,
                                columns: 2,
                            },
                            slidesPerGroup: 4,
                            allowTouchMove: true,
                        },
                        576: {
                            slidesPerView: 2,
                            grid: {
                                rows: 2,
                                columns: 1,
                            },
                            slidesPerGroup: 1,
                            allowTouchMove: true,
                        },
                        1: {
                            slidesPerView: 1,
                            grid: {
                                rows: 1,
                                columns: 1,
                            },
                            slidesPerGroup: 1,
                            allowTouchMove: true,
                        }
                    }
                });

                webinarVideos.init();
            });
        </script>
    </div>
    <footer class="section-footer webinar-videos-footer">
        <a href="https://happy-job.ru/video/" target="_blank" class="button-outline" onclick="ym(46152993,'reachGoal','look_all_videos')">Смотреть все видео</a>
    </footer>
</section>



<style>
    .testimonials-slider.testimonials-slider--large {
        height: 350px;
    }

    .testimonials-slider--large .testimonials-item {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
    }

    .testimonials-slider--large .testimonials-item::after {
        content: "";
        height: 280px;
        width: 1px;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--c-border);
    }

    .testimonials-wrapper {
        display: flex;
        align-items: center;
    }

    .testimonials-wrapper .slick-arrow {
        flex: 0;
        top: -110px;
    }

    .testimonials-slider {
        position: relative;
        overflow: hidden;
        flex: 1;
        padding-bottom: 1rem;
    }

    .testimonials-wrapper .swiper-pagination-bullet{
        background: #dcdddf;
        display: inline-block;
        width: 16px;
        height: 16px;
        margin: 0 12px !important;
        opacity: 1;
        transition: transform 0.2s linear;
    }

    .testimonials-wrapper .swiper-pagination-bullet.swiper-pagination-bullet-active{
        background-color: #47657d;
        transform: scale(1.4);
        z-index: 1;
    }

    @media (min-width: 992px) {
        .testimonials-slider {
            max-height: 350px;
        }
    }

    .testimonials-item {
        position: relative;
    }

    .testimonials {
        padding: 0 0 3px;
        margin: 0 auto;
    }

    .client-card {
        width: 91%;
    }

    .client-card.right-side {
        margin-left: auto;
    }

    .client-card.right-side:before {
        content: "";
        display: block;
        position: absolute;
        width: 1px;
        height: 280px;
        background-color: var(--c-border);
        top: 0;
        left: 0;
    }

    .client-card-link {
        display: block;
        height: 160px;
        overflow: hidden;
        margin-bottom: 38px;
        position: relative;
    }

    .client-card-image {
        border-radius: 10px;
        width: 100%;
        display: block;
        margin: 0 auto;
        object-fit: cover;
    }

    .client-card-link .icon-play {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .client-card-logo {
        height: 50px;
    }

    .client-card-logo {
        display: block;
        height: 100%;
        margin: 0 auto;
    }

    .client-card-caption {
        text-align: center;
        max-width: 300px;
        margin-left: auto;
    }

    .client-card-title {
        font-weight: 700;
        font-size: 14px;
        line-height: 1.2;
        margin: 0 0 1px;
    }

    .client-card-description {
        margin: 0;
        font-size: 11px;
        line-height: 1.2;
        letter-spacing: 0.37px;
    }

    @media (max-width: 1600px) {
        .testimonials-wrapper .slick-arrow {
            flex-basis: 40px;
            min-width: 40px;
        }
    }

    @media (max-width: 1440px) {
        .client-card-link {
            height: auto;
        }

        .client-card-title {
            font-size: 13px;
        }

        .client-card-description {
            font-size: 11px;
        }
    }

    @media (max-width: 993px) {
        .testimonials-wrapper .slick-arrow {
            display: none;
        }
    }

    @media (max-width: 769px) {
        .testimonials.swiper-wrapper{
            margin: 0 0 15px;
        }
        .testimonials-wrapper{
            position: relative;
        }
        .client-card {
            width: 100%;
            max-width: 100%;
        }

        .client-card-link {
            margin-bottom: 1rem;
        }

        .client-card.right-side:before {
            display: none;
        }

        .slick-arrow-prev {
            right: 10px;
        }

        .slick-arrow-prev:hover {
            right: 12px;
        }

        .slick-arrow-next {
            left: 10px;
        }

        .slick-arrow-next:hover {
            left: 12px;
        }

        .testimonials-wrapper {
            margin: 0 auto;
            flex-basis: calc(100vw - 100px);
            max-width: calc(100vw - 100px);
        }

        .testimonials-slider {
            max-height: auto;
        }

        .single-video-card{
            max-height: auto;
        }

        .testimonials-slider.testimonials-slider--large{
            height: auto;
        }

        .single-video-card--large{
            max-height: auto;
        }

        .testimonials-wrapper .slick-arrow {
            position: absolute;
            display: block;
            bottom: 7%;
            top: auto;
            z-index: 5;
        }

        .testimonials-wrapper .slick-arrow.testimonials-slider-arrow-next  {
            right: 30px;
        }

        .testimonials-wrapper .slick-arrow.testimonials-slider-arrow-prev  {
            left: 30px;
        }

        .slick-arrow .swiper-button-disabled{
            opacity: .35;
            cursor: auto;
            pointer-events: none;
        }
    }

    @media (max-width: 767px) {
        .client-card.right-side {
            margin-left: initial;
            margin-top: 2.5rem;
        }
    }

    @media (max-width: 577px) {
        .testimonials-wrapper {
            margin: 0 auto 1rem;
            flex-basis: calc(100vw - 60px);
            max-width: calc(100vw - 60px);
        }

        .testimonials-arrows-wrapper .slider-footer-arrow {
            margin-top: 40px;
        }

        .section-footer.testimonials-arrows-wrapper .slider-footer-arrow .slick-arrow {
            top: -7rem;
        }

        .testimonials{
            margin: 0 0 -1rem;
        }

        .testimonials-slider--large .testimonials-item{
            justify-content: flex-start;
        }

        .responses-slider--large .responses-item{
            flex-direction: column;
        }

        .testimonials-wrapper .swiper-pagination-bullet{
            margin: 0 5px !important;
            width: 10px;
            height: 10px;
        }
    }
</style>
<section class="section">
    <div class="container">
        <header class="section-header">
            <h2 class="section-title" style="display: flex; justify-content: center; align-items: baseline;">
                <span class="animated-counter" style="margin-right: 1rem;font-size: clamp(1.563rem, 0.938rem + 3.125vw, 3.75rem); font-weight: 900;">197</span>
                отзывов клиентов
            </h2>
        </header>

        <div class="section-body slow">
            <div class="testimonials-wrapper">
                <a class="slick-arrow testimonials-slider-arrow-prev">
                    <b class="slick-arrow-prev"></b>
                </a>
                <div class="testimonials-slider testimonials-slider--large swiper">
                    <ul class="testimonials  swiper-wrapper">
                        <li class="testimonials-item  swiper-slide">
                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link" data-fancybox="footer-reviews" href="https://vimeo.com/659238688">
                                        <img class="single-video-image" src="/img/happy-job/reviews/vid_obi.jpg" alt="Оценка вовлеченности персонала в OBI Россия"><b class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/obi.png" loading="lazy" alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Катарина Карасева</div>
                                            <p class="single-video-description">
                                                Старший менеджер по развитию бренда работодателя и
                                                внутренним коммуникациям OBI Россия
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>

                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link" data-fancybox="footer-reviews" href="https://vimeo.com/637913619">
                                        <img class="single-video-image" src="/img/happy-job/reviews/aliexpress-video_0.jpg" alt="Как работают с персоналом в AliExpress"><b class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/aliexpress-logo_0.png" loading="lazy" alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Ирина Бебешина</div>
                                            <p class="single-video-description">
                                                Бизнес-партнер по управлению персоналом Департамента
                                                ИТ
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </li>
                        <li class="testimonials-item  swiper-slide">
                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link" data-fancybox="footer-reviews" href="https://vimeo.com/391176331">
                                        <img class="single-video-image" src="/img/happy-job/reviews/rev_alfa.jpg" alt="АльфаСтрахование – Отзыв о платформе Happy Job"><b class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/alfa.png" loading="lazy" alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Дмитрий Попов</div>
                                            <p class="single-video-description">
                                                руководитель направления внутренних коммуникаций,
                                                АльфаСтрахование
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>

                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link" data-fancybox="footer-reviews" href="https://vimeo.com/586641979">
                                        <img class="single-video-image" src="/img/happy-job/reviews/rev_evroplan.jpg" alt="Развитие вовлеченности персонала в ЛК Европлан"><b class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/europlan-1.png" loading="lazy" alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Анаит Говорина</div>
                                            <p class="single-video-description">
                                                директор департамента по работе с персоналом, ЛК
                                                "Европлан"
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </li>
                        <li class="testimonials-item  swiper-slide">
                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link" data-fancybox="footer-reviews" href="https://vimeo.com/390686185" tabindex="0">
                                        <img class="single-video-image" src="/img/happy-job/reviews/rev_sky.jpg" alt="Skyeng – Отзыв о платформе Happy Job"><b class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/skyeng.svg" loading="lazy" alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Полина Лаптева</div>
                                            <p class="single-video-description">
                                                руководитель отдела внутренних коммуникаций, Skyeng
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>

                            <div class="single-video-card single-video-card--large">
                                <small style="display: none;"></small>
                                <figure class="single-video-picture"><a class="single-video-link" data-fancybox="footer-reviews" href="https://vimeo.com/396639819" tabindex="0">
                                        <img class="single-video-image" src="/img/happy-job/reviews/rev_ingos_0.jpg" alt="Ингосстрах – Отзыв о платформе Happy Job"><b class="icon icon-play"></b>
                                    </a>
                                    <div class="single-video-wrapper">
                                        <div class="single-video-logo">
                                            <img src="https://happy-job.ru/img/happy-job/reviews/ingo_0.png" loading="lazy" alt="">
                                        </div>
                                        <div class="single-video-caption">
                                            <div class="single-video-title">Алексей Алексапольский</div>
                                            <p class="single-video-description">
                                                Руководитель проекта по развитию персонала
                                            </p>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </li>
                    </ul>
                    <div class="testimonials-slider-pagination swiper-pagination"></div>
                </div>
                <a class="slick-arrow testimonials-slider-arrow-next">
                    <b class="slick-arrow-next"></b>
                </a>
            </div>

        </div>
        <footer class="section-footer testimonials-arrows-wrapper">
            <div class="slider-footer-row">
                <div class="slider-footer-arrow">
                    <a class="slick-arrow"><b class="slick-arrow-prev"></b></a>
                </div>
                <div class="slider-footer-center">
                    <a href="https://happy-job.ru/clients/reviews/" target="_blank" class="button-outline" onclick="ym(46152993,'reachGoal','look_all_reviews')">Смотреть все отзывы</a>
                </div>
                <div class="slider-footer-arrow">
                    <a class="slick-arrow"><b class="slick-arrow-next"></b></a>
                </div>
            </div>
        </footer>
    </div>
</section>


<script>
    $(function(){
        if ($(".testimonials").length) {

            const swiper = new Swiper(".testimonials-slider", {
                slidesPerView: 1,

                autoplay: {
                    delay: 5000,
                },

                pagination: {
                    el: ".testimonials-slider-pagination",
                    clickable: true,
                },

                navigation: {
                    nextEl: ".slick-arrow-next",
                    prevEl: ".slick-arrow-prev",
                }
            });
        }
    })
</script>



<!-- 12. Форма Протестируйте бесплатно -->
<style>
    .free-test{
        background-color: #DFEAEC;
        position: relative;
        padding: clamp(3.75rem, 3.178571428571429rem + 2.857142857142857vw, 5.75rem) 1rem 0;
    }
    .free-test-scheme{
        display: grid;
        grid-template-columns: 300px 1fr 217px;
        grid-template-rows: auto 1fr;
        grid-template-areas: 'photo content form' 'photo cite form';
        grid-column-gap: 6vw;
        grid-row-gap: clamp(1.5rem, 1.0714285714285714rem + 2.142857142857143vw, 3rem);
        max-width: 1120px;
        margin: 0 auto;
        justify-content: center;
        align-items: stretch;
    }
    .free-test-photo{
        position: relative;
        grid-area: photo;
        align-self: end;
        margin: 0;
    }
    .free-test-photo img{
        width: 100%;
        position: absolute;
        display: block;
        transform: scale(160%) translate(-30px, -73px);
        bottom: 0;
    }
    .free-test-content{
        grid-area: content;
    }

    .free-test-content .form-title{
        font-weight: 600;
        padding: 0;
        margin: 0 0 clamp(1.25rem, 1.1428571428571428rem + 0.5357142857142857vw, 1.625rem);
        font-size: clamp(1.625rem, 1.4464285714285714rem + 0.8928571428571428vw, 2.25rem);
        line-height: 1.05;
    }
    .free-test-content .form-title span {
        display: block;
        color: var(--c-button);
    }
    .free-test-content p,
    .free-test-content li{
        font-size: 14px;
    }
    .free-test-content ol{
        padding-left: 1rem;
    }
    .free-test-cite{
        grid-area: cite;
        padding-left: 60px;
    }
    @media (min-width: 1200px) {
        .free-test-content,
        .free-test-cite{
            margin-left: -2rem;
            margin-top: 0;
        }
        .free-test-cite{
            align-items: center;
        }
        .footer-form .button-default{
            width: 100%;
            margin-bottom: 1rem;
        }
    }
    .free-test-cite q{
        position: relative;
        display: block;
        margin-bottom: 1rem;
    }

    .free-test-cite q:before {
        content: '';
        position: absolute;
        left: -58px;
        height: 1px;
        width: 45px;
        top: 7px;
        display: block;
        background-color: var(--c-text);
    }

    .free-test-form{
        grid-area: form;
        padding-bottom: 3rem;
    }

    .free-test-form a{
        color: var(--c-link);
    }

    .free-test-form .c-form-label,
    .free-test-form .c-form h2{
        display: none;
    }

    .privacy-policy a{
        color: #61c13a;
    }

    @media (min-width: 1199px) {
        .free-test-form{
            min-height: 666px;
        }
    }
    .footer-form-list{
        padding: 0;
        margin: 0;
    }
    .footer-form-item{
        margin-bottom: 7px;
        list-style-type: none;
    }

    .footer-form-item .parsley-errors-list{
        padding: 0;
    }

    .footer-form-item .parsley-custom-error-message{
        list-style-type: none;
        font-size: 9px;
        color: red;
    }

    .footer-form-item.-select{
        display: flex;
        flex-direction: column;
    }

    .footer-form-item.-select .parsley-errors-list{
        order: 3;
    }

    .footer-form-item.-select .nice-select{
        height: 33px;
        padding: 10px 20px 9px 11px;
        border-color: var(--c-border);
        font-size: 12.5px;
        line-height: 1;
    }
    .footer-form-item.-select .current{
        color: #313131;
    }

    .free-test-form select{
        height: 33px;
    }

    .free-test-form input,
    .free-test-form select,
    .free-test-form textarea{
        width: 100%;
        font-size: 12.5px;
        padding: 9px 10px 9px 11px;
        border-radius: 4px;
        border-color: var(--c-border);
        color: #313131;
        min-height: 33px;
        background-color: #fff;
        border-width: 1px;
        border-style: solid;
        font-family: "Gotham Pro", -apple-system, BlinkMacSystemFont, "Segoe UI",Roboto, "Helvetica Neue", Arial, sans-serif;
    }

    .form-description{
        padding-left: 4px;
        font-size: 11px;
        margin: 15px 0 15px;
        letter-spacing: 0.2px;
    }
    .privacy-policy {
        margin: 0;
    }
    .privacy-policy a {
        font-size: 12px;
        text-decoration: none;
    }
    .privacy-policy i {
        position: relative;
        top: 5px;
        width: 13px;
        height: 13px;
        right: inherit;
        margin-right: 4px;
        float: left;
    }



    @media (max-width:1201px) {
        .free-test-scheme{
            grid-template-columns: 200px 1fr 300px;
            grid-template-rows: auto auto;
            grid-template-areas: 'content content form' 'photo cite form';
            padding: 0 1rem;
        }
        .free-test-photo img {
            position: relative;
            display: block;
            transform: scale(100%) translate(0px,0px);
        }
        .free-test-cite{
            align-self: center;
            padding-left: 0px;
        }

    }
    @media (max-width:769px) {
        .free-test-scheme{
            grid-template-columns: auto auto;
            grid-template-rows: auto auto;
            grid-template-areas: 'content content' 'form form' 'photo cite';
        }
        .free-test-photo {
            transform: scale(140%) translate(-19%, -14%);
        }

        .free-test-cite{
            padding-bottom: 3rem;
        }
        .free-test-cite *{
            font-size: 14px;
        }
        .free-test-form {
            <<<<<<< 1e5c8831e94792433c6e9bcacfcce86f3f5b67bb
            padding-bottom: 3rem;
        =======
        padding-bottom: 1rem;
        >>>>>>> bb7a9d4b1014bd501c8c40e6c104b0c7aa7b8657
        }
        .free-test-cite q:before {
            left: -30px;
            height: 1px;
            width: 20px;
        }
    }


</style>

<!-- /webinar-girl -->
<style>
    .hellogirl{
        position: fixed;
        z-index: 9999;
        bottom: -10px;
        right: 10px;
        opacity: 0;
        visibility: hidden;
        transition: all 0.5s ease 0s;
        display: none !important;
    }
    .hellogirl__content {
        display: none;
        background: #ebecee;
        max-width: 210px;
        padding: 0px 0px 15px;
        margin: 0 30px 10px 0;
        line-height: 1.2;
        border-radius: 10px;
        position: relative;
        box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.11);
        text-align: center;
    }
    .hellogirl__title {
        padding: 8px 10px 8px;
        font-size: 16px;
        font-weight: bold;
    }
    .hellogirl__content_pilot .hellogirl__title{
        font-size: 23px;
        line-height: 1.1;
        padding-top: 20px;
    }
    .hellogirl__content_pilot .hellogirl__title span{
        color: #F5515A;
        font-size: 1em;
    }
    .hellogirl__content_pilot .hellogirl__img{
        margin: 12px 0 -5px;
    }
    .hellogirl__text{
        padding: 17px 5px 6px;
        font-size: 13px;
        letter-spacing: -0.01em;
        line-height: 1.4;
    }

    .hellogirl__text div {
        margin-top: 16px;
        font-size: 1em;
        letter-spacing: 0.01em;
        font-weight: bold;
    }

    .hellogirl__img{
        position: relative;
        z-index: 0;
        display: block;
    }
    .hellogirl__img img {
        width: 100%;
        max-width: 100%;
    }
    .hellogirl__img_video::before {
        content: '';
        display: block;
        width: 40px;
        height: 40px;
        border-radius: 50px;
        background-color: #fff;
        box-shadow: 0 0px 6px 1px rgb(0 0 0 / 35%);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 90%;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%2361c13a' d='M8 6.82v10.36c0 .79.87 1.27 1.54.84l8.14-5.18a1 1 0 0 0 0-1.69L9.54 5.98A.998.998 0 0 0 8 6.82z'/%3E%3C/svg%3E");
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        will-change: transform;
        transition: transform 0.4s;
    }
    .hellogirl__img_video:hover::before {
        transform: translate(-50%, -50%) scale(1.1);
    }
    .hellogirl__logo{
        background: #fff;
        display: inline-block;
        margin: -17px auto -6px;
        padding: 12px 17px;
        box-shadow: 0 0 5px rgba(0,0,0,0.2);
        position: relative;
        z-index: 5;
    }
    .hellogirl__logo img{
        max-width: 55px;
        max-height: 55px;
    }
    .hellogirl__button {
        padding: 7px 10px 6px;
        background: #61c13a;
        display: block;
        max-width: 100%;
        font-size: 18px;
        line-height: 1;
        text-transform: none;
        vertical-align: top;
        margin-top: 0;
        box-shadow: 0 5px 0 #519e2d;
        color: #fff;
        margin: 10px 15px;
        text-align: center;
        border-radius: 5px;
        font-weight: bold;
        transition: all 0.05s ease 0s;
    }

    .hellogirl__button:hover,
    .hellogirl__button:focus,
    .hellogirl__button:active {
        text-decoration: none;
        color: #fff;
        background: #519f2d;
    }

    .hellogirl__content_pilot .hellogirl__button{
        color: #fff !important;
        cursor: pointer;
    }
    .hellogirl__content:after {
        content: "";
        bottom: -18px;
        left: 91px;
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-top: 20px solid #ebecee;
        position: absolute;
        border-color: #ebecee transparent transparent transparent;
        -webkit-filter: drop-shadow(1px 1px 1px rgba(0,0,0,.5));
        filter: drop-shadow(1px 2px 1px rgba(0,0,0,0.1));
    }
    .hellogirl__close {
        position: absolute;
        right: 0px;
        top: -8px;
        width: 20px;
        height: 20px;
        cursor: pointer;
        background: url(https://happy-job.ru/img/happy-job/images/close.svg) center no-repeat;
        background-size: 17px auto;
    }
    .hellogirl__close:before {
        display: inline-block;
        content: "\00d7";
        font-size: 25px;
        line-height: 1;
        cursor: pointer;
        font-weight: bold;
        display: none;
    }
    @media (max-width: 767px) {
        .hellogirl__bg {
            display: none !important;
            position: fixed;
            top: 0;
            z-index: 9998;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.2);
            pointer-events: none;
            opacity: 0;
            visibility: hidden;
            transition: all 0.5s ease 0s;
        }
        .hellogirl__close {
            display: none !important;
            right: 5px !important;
            top: -40px !important;
            width: 30px !important;
            height: 30px !important;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #000;
            border-radius: 50%;
        }
        .hellogirl__video {
            display: none;
        }
        .hellogirl__content {
            max-width: unset !important;
            margin-right: 0 !important;
            border-radius: 0 !important;
        }
        .hellogirl {
            right: 0 !important;
            width: 100vw;
            bottom: -15px !important;
        }
        .hellogirl__img,.hellogirl__logo{
            display: none;
        }
        .hellogirl__text{
            padding: 0 5px 5px;
        }
        .hellogirl__text div{
            margin-top: 5px;
        }
        .hellogirl__button{
            max-width: 300px;
            margin: 5px auto 10px;
        }
    }
    @media (max-width: 576px) and (orientation: portrait){
        .hellogirl__text-text{
            padding-left: 0px !important;
        }
        .hellogirl__img,
        .hellogirl__img + br{
            display: none;
        }
    }
    @media (max-height: 450px) and (orientation: portrait){
        .hellogirl__content_pilot .hellogirl__title{
            margin-bottom: -20px;
        }
    }
    @media (max-height: 450px){
        .hellogirl__img,.hellogirl__logo{
            display: none;
        }
        .hellogirl__button{
            font-size: 14px;
        }
        .hellogirl__video{
            text-align: center;
        }
        .hellogirl__video canvas{
            height: 110px;
            margin-right: 12px;
        }
        .hellogirl__text:after{
            border-left-width: 10px;
            border-right-width: 10px;
            border-top-width: 10px;
            bottom: -8px;
            left: 70px
        }
    }
</style>
<script type="text/javascript">
    $(document).ready(function () {
        var outputCanvas = document.getElementById('output'),
            output = outputCanvas.getContext('2d',{ willReadFrequently: true }),
            bufferCanvas = document.getElementById('buffer'),
            buffer = bufferCanvas.getContext('2d',{ willReadFrequently: true }),
            video = document.getElementById('video-girl'),
            width = outputCanvas.width,
            height = outputCanvas.height,
            interval;
        if($(window).width() > 767){
            playgirlvideo();
        }
        $(window).resize(function(){
            if($(window).width() > 767 && !$('#video-girl').hasClass('playing')){
                playgirlvideo();
            }
        });
        var cookieObj = new URLSearchParams(document.cookie.replaceAll("; ","&"));
        var cookieHideGirl = cookieObj.get('girl');

        if(cookieHideGirl == '1') {
            $('.hellogirl,.hellogirl__bg').css({'visibility': 'hidden','opacity': '0'});
        }
        else{
            var cookieElGirl = cookieObj.get('elgirl');
            if(!cookieElGirl){
                cookieElGirl = '0';
            }
            else if(!$('.hellogirl__content').filter(':eq('+cookieElGirl+')').length){
                cookieElGirl = '0';
            }
            else{
                cookieElGirl = parseInt(cookieElGirl);
                cookieElGirl++;
                if(cookieElGirl > $('.hellogirl__content').length-1){
                    cookieElGirl = '0';
                }
            }
            document.cookie = 'elgirl='+cookieElGirl;
            $('.hellogirl__content').filter(':eq('+cookieElGirl+')').show();
            setTimeout(function () {
                $('.hellogirl,.hellogirl__bg').css({'visibility': 'visible','opacity': '1'});
            }, 1000);
        }

        $('.hellogirl__close').on('click',function(e){
            document.cookie = 'girl=1';
            document.cookie = 'elgirl=0';
            $('.hellogirl,.hellogirl__bg').css({'visibility': 'hidden','opacity': '0'});
        });

        $('.hellogirl__button,.hellogirl__img_video').on('click',function(e){
            document.cookie = 'girl=1';
            document.cookie = 'elgirl=0';
            $('.hellogirl,.hellogirl__bg').css({'visibility': 'hidden','opacity': '0'});
            if($(this).hasClass('hellogirl__scroll')){
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('.footer-form').offset().top - $('header').height() - 20
                }, 1000);
                return false;
            }
        });

        function processFrame() {
            buffer.drawImage(video, 0, 0);

            var image = buffer.getImageData(0, 0, width, height),
                imageData = image.data,
                alphaData = buffer.getImageData(0, height + 1, width, height).data;

            for (var i = 3, len = imageData.length; i < len; i = i + 4) {
                imageData[i] = alphaData[i - 1];
            }

            output.putImageData(image, 0, 0, 0, 0, width, height);
        }
        function playgirlvideo(){
            $('#video-girl source').each(function(){
                $(this).attr('src',$(this).data('src'));
            });
            $('#video-girl').addClass('playing');
            video.load();
            video.addEventListener('play', function () {
                clearInterval(interval);
                interval = setInterval(processFrame, 40)
            }, false);

            // Firefox doesn't support looping video, so we emulate it this way
            video.addEventListener('ended', function () {
                video.play();
            }, false);
            video.play();
        }
    });

</script>

<!-- endrender common/footer-->

<link async rel="stylesheet" type="text/css" href="/fonts/gp/stylesheet.css">
<link async rel="stylesheet" type="text/css" href="/fonts/fontello-a444d455/css/fontello.css">
<svg style="display: none">
    <symbol id="videoCircle" viewbox="0 0 152.51 152.51">
        <circle cx="76.26" cy="76.26" r="76.26"></circle>
    </symbol>
    <symbol id="videoTriangle" viewbox="0 0 152.51 152.51">
        <path d="M61,47.32v57.87c0,2.49,4.06,3.74,6.43,2l38.06-28.25a2.32,2.32,0,0,0,.06-3.91L67.49,45.39C65.15,43.56,61,44.8,61,47.32Z"></path>
    </symbol>
    <symbol id="videoArrow" viewbox="0 0 55.23 50.01">
        <path d="M54,22,33.26,1.26A4.29,4.29,0,1,0,27.2,7.32L40.86,21H4a4,4,0,1,0,0,8H40.86L27.2,42.69a4.29,4.29,0,1,0,6.06,6.06L54,28A4.29,4.29,0,0,0,54,22Z"></path>
    </symbol>
    <symbol id="caveat-k" viewbox="0 0 17 18" fill="none">
        <path d="M11.165 17.19C10.685 17.04 10.265 16.815 9.905 16.515C9.545 16.185 9.2 15.825 8.87 15.435C8.72 15.255 8.465 14.895 8.105 14.355C7.745 13.815 7.355 13.215 6.935 12.555C6.545 11.895 6.17 11.28 5.81 10.71C5.45 10.11 5.18 9.66 5 9.36C4.85 9.81 4.685 10.185 4.505 10.485C4.355 10.755 4.28 11.19 4.28 11.79C3.98 12.21 3.755 12.69 3.605 13.23C3.485 13.74 3.35 14.25 3.2 14.76C3.11 15.09 2.96 15.39 2.75 15.66C2.57 15.93 2.33 16.17 2.03 16.38C1.67 16.35 1.355 16.23 1.085 16.02C0.845 15.81 0.635 15.6 0.455 15.39C0.275 15.03 0.2 14.685 0.23 14.355C0.26 14.025 0.335 13.71 0.455 13.41C0.515 13.14 0.68 12.615 0.95 11.835C1.25 11.055 1.565 10.215 1.895 9.315C2.225 8.385 2.525 7.56 2.795 6.84C3.065 6.09 3.215 5.625 3.245 5.445C3.425 4.845 3.74 4.2 4.19 3.51C4.67 2.79 5 2.01 5.18 1.17C5.24 0.959999 5.39 0.764999 5.63 0.584999C5.87 0.374999 6.14 0.269999 6.44 0.269999C6.77 0.239999 7.04 0.404999 7.25 0.764999C7.31 0.794999 7.4 0.839999 7.52 0.899999C7.64 0.929999 7.73 0.99 7.79 1.08C8.03 1.35 8.165 1.635 8.195 1.935C8.255 2.235 8.195 2.55 8.015 2.88C7.625 3.57 7.295 4.14 7.025 4.59C6.785 5.01 6.545 5.475 6.305 5.985C6.065 6.495 5.795 7.2 5.495 8.1C6.005 7.98 6.38 7.89 6.62 7.83C6.86 7.74 7.085 7.605 7.295 7.425C7.535 7.215 7.85 6.9 8.24 6.48C8.39 6.33 8.69 6.045 9.14 5.625C9.62 5.175 10.115 4.695 10.625 4.185C11.165 3.675 11.63 3.225 12.02 2.835C12.44 2.445 12.665 2.22 12.695 2.16C12.875 1.89 13.055 1.65 13.235 1.44C13.445 1.2 13.715 1.02 14.045 0.899999C14.495 0.959999 14.81 1.05 14.99 1.17C15.17 1.26 15.515 1.515 16.025 1.935C16.175 2.055 16.235 2.34 16.205 2.79C16.175 3.21 16.01 3.54 15.71 3.78C15.17 4.2 14.495 4.74 13.685 5.4C12.875 6.06 12.005 6.75 11.075 7.47C10.175 8.19 9.275 8.865 8.375 9.495C8.795 10.185 9.17 10.845 9.5 11.475C9.83 12.075 10.1 12.585 10.31 13.005C10.37 13.755 10.64 14.265 11.12 14.535C11.63 14.775 12.245 14.895 12.965 14.895C13.205 15.015 13.355 15.165 13.415 15.345C13.505 15.495 13.55 15.675 13.55 15.885C13.58 16.065 13.61 16.245 13.64 16.425C13.22 16.695 12.92 16.935 12.74 17.145C12.59 17.325 12.41 17.43 12.2 17.46C12.02 17.46 11.675 17.37 11.165 17.19Z" fill="currentcolor"></path>
    </symbol>
</svg>
<script type="text/javascript" src="/jquery/swiper/swiper-bundle.min.js"></script>
<style>
    .node-article-blog figure.image figcaption {
        text-align: center;
        font-size: 14px;
        font-style: italic;
        letter-spacing: 0.5px;
        opacity: 0.5;
    }

    .container.blog figure.image img {
        margin-left: auto;
        margin-right: auto;
    }

    html.swal2-shown.swal2-height-auto,
    body.swal2-shown.swal2-height-auto {
        overflow: hidden;
    }

    .swal2-shown.swal2-height-auto .header-top,
    .swal2-shown.swal2-height-auto .header-menu-dop {
        padding-right: 1rem;
    }

    .swal2-title {
        display: flex !important;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 0.5rem;
    }

    .modal-title-top {
        font-size: 1.7rem;
        display: flex;
        flex-direction: column;
        margin-top: 1.5rem;
        font-weight: bold;
    }

    .modal-product {
        font-size: 0.7em;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        letter-spacing: 3px;
    }

    .modal-product .modal-description {
        font-size: 0.7em;
        font-weight: normal;
        letter-spacing: 0px;
    }

    .form-input {
        display: block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        margin-bottom: 1rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    #comment.form-input {
        height: 110px;
    }

    .swal2-container .swal2-confirm.swal2-styled {
        background: #f4515a;
    }

    .form-label {
        border-top: none;
        text-align: left;
        font-size: 14px;
        padding-bottom: 0.3rem;
    }

    .form-label:before {
        content: attr(title);
    }

    .form-label:not([title="Комментарий:"]):after {
        content: "*";
        color: red;
        transform: translateY(-3px);
    }

    .button {
        display: inline-flex;
        font-size: clamp(0.875rem, 0.75rem + 0.625vw, 1.3125rem);
        color: #fff !important;
        background-color: #f4515a;
        padding: 0.8rem 1rem 0.7rem;
        transition: color 0s, background-color 0s ease-in-out,
        border-color 0s ease-in-out, box-shadow 0.15s ease-in-out;
        box-shadow: 0 4px 0 #c63839 !important;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
        line-height: 1;
        max-height: 50px;
        justify-content: center;
        align-items: center;
    }

    .button.-client {
        background-color: #61c13b;
        box-shadow: 0 4px 0 #46882c !important;
        font-weight: 700;
    }

    .button.-service {
        background-color: #355fe5;
        box-shadow: 0 4px 0 #213b8e !important;
    }

    .button.-feedbackx {
        background-color: #ffaa00;
        box-shadow: 0 4px 0 #c88600 !important;
        color: #000;
    }

    .button.-survey {
        background-color: #a5a5a5;
        box-shadow: 0 4px 0 #6c6c6c !important;
        color: #000;
    }

    .button:hover {
        background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1));
    }

    .btn.btn-3+.button {
        transform: translateY(-1rem);
    }

    .b-top-title .button {
        max-width: 190px;
    }

    .swal2-footer .privacy-btn>a[data-href="/privacy-policy"]:first-child,
    .swal2-footer a[href="mailto:sales@happy-job.ru"] {
        color: var(--c-link) !important;
    }

    .swal2-footer {
        text-align: center;
        font-size: 14px !important;
    }

    .swal2-footer .privacy-btn>a[data-href="/privacy-policy"]:first-child {
        display: inline-flex;
        gap: 0.2rem;
        align-items: center;
        justify-content: center;
        margin-bottom: 2rem;
        cursor: pointer;
        transform: translateY(4px);
    }

    .swal2-footer .privacy-btn>a[data-href="/privacy-policy"]:first-child:before {
        content: "";
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--material-symbols' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%2361c13a' d='M4 22V8h3V6q0-2.075 1.463-3.538Q9.925 1 12 1t3.538 1.462Q17 3.925 17 6v2h3v14ZM9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6Zm3 9q.825 0 1.413-.587Q14 15.825 14 15q0-.825-.587-1.413Q12.825 13 12 13q-.825 0-1.412.587Q10 14.175 10 15q0 .825.588 1.413Q11.175 17 12 17Z'%3E%3C/path%3E%3C/svg%3E");
        flex-basis: 16px;
        min-width: 16px;
        width: 16px;
        height: 16px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: contain;
        transform: translateY(-2px);
    }

    .swal2-footer a[href="mailto:sales@happy-job.ru"] {
        font-size: 2em;
    }

    .swal2-close {
        box-shadow: none !important;
    }

    .swal2-no-war {
        display: none !important;
        opacity: 0;
    }

    .order-demo-wrapper {
        position: relative;
    }

    html.with-fancybox {
        overflow: hidden;
    }

    .fancybox__container .fancybox__backdrop {
        background-color: rgba(0, 0, 0, .4);
    }

    .fancybox__content>.carousel__button.is-close {
        top: 0px;
        color: var(--fancybox-color, #000);
        background-color: #fff;
        border-radius: 5px;
    }

    .fancybox__content>.carousel__button.is-close:hover {
        color: #61C13B;
    }

    .fancybox__container .fancybox__carousel.is-draggable .fancybox__container .fancybox__slide,
    .fancybox__container .fancybox__carousel.is-draggable .fancybox__container .fancybox__slide .fancybox__content {
        overflow: hidden;
    }

    .fancybox__content :focus:not(.carousel__button.is-close) {
        outline: 1px solid #000;
    }

    .fancybox__content {
        padding: 20px 36px;
    }

    .main-modal {
        background-color: #fff;
        max-width: 500px;
        border-radius: 10px;
    }

    .main-modal-flow {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .main-modal-header {}

    .main-modal-title {
        font-size: 1.7rem;
        font-weight: bold;
        text-align: center;
        padding: 0;
    }

    .main-modal-form {
        display: grid;
        grid-template-columns: 1fr;
        grid-auto-flow: row dense;
        grid-gap: 0.75rem;
    }

    .main-modal-input {
        display: flex;
        flex-direction: column;
    }

    .main-modal-input input,
    .main-modal-input select,
    .main-modal-input textarea {
        display: block;
        font-size: 13px;
        line-height: 1.42857143;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        padding: 10px 14px;
        border-radius: 4px;
        color: #313131;
        outline: none;
    }

    .main-modal-input textarea {
        max-height: 100px;
    }

    .main-modal-input button {
        padding-bottom: 0.4rem;
    }

    .main-modal-input input[type="date"] {
        position: relative;
        padding: 7px 16px 5px 13px;
    }

    .main-modal-input input[type="date"]::-webkit-calendar-picker-indicator {
        position: absolute;
        inset: 0;
        width: 92.5%;
        height: 90%;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='currentColor' d='M5 6h14v2H5z' opacity='.3'/%3E%3Cpath fill='currentColor' d='M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right center;
        background-size: 20px 20px;
    }

    .main-modal-input select::-ms-expand {
        display: none;
    }

    .main-modal-input select#time {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='currentColor' d='M12 20a8 8 0 0 0 8-8a8 8 0 0 0-8-8a8 8 0 0 0-8 8a8 8 0 0 0 8 8m0-18a10 10 0 0 1 10 10a10 10 0 0 1-10 10C6.47 22 2 17.5 2 12A10 10 0 0 1 12 2m.5 5v5.25l4.5 2.67l-.75 1.23L11 13V7h1.5Z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 5px center;
        background-size: 20px 20px;
        padding: 8px 27px 6px 12px;
        -moz-appearance: none;
        -webkit-appearance: none;
    }

    .main-modal-input select#respondents {
        max-width: 140px;
        color: rgba(0, 0, 0, 0.55);
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 512 512'%3E%3Cpath fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='m112 184l144 144l144-144'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 5px center;
        background-size: 20px 20px;
        padding: 8px 27px 6px 14px;
        -moz-appearance: none;
        -webkit-appearance: none;
    }

    .main-modal-input select option {
        padding-top: 4px;
    }

    .main-modal-input input[type="date"]::-moz-selection {
        background: green;
    }

    .main-modal-input input[type="date"]::selection {
        background: green;
    }

    .main-modal-label {
        color: #777;
        font-size: 13px;
        margin-bottom: 0;
    }

    .main-modal-label sup {
        color: red;
    }

    .main-modal-input.-submit-button {
        align-items: center;
        justify-content: center;
    }

    .main-modal-divider {
        height: 1px;
        background-color: #eee;
        margin: 0.5rem 0;
    }

    .main-modal-footer {
        background-color: #fff;
        padding: 0;
        text-align: center;
    }

    .main-modal-footer p {
        margin: 0;
        font-size: 13px;
        line-height: 1.2;
    }

    .main-modal-footer p:nth-child(2) {
        margin: 0 0 1rem;
    }

    .main-modal-footer a,
    .main-modal-footer a:hover {
        color: var(--c-link);
    }

    .main-modal-footer a[href="/privacy-policy"] {
        display: flex;
        gap: 0.3rem;
        align-items: center;
        justify-content: center;
    }

    .privacy-policy-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--material-symbols' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%2361c13a' d='M4 22V8h3V6q0-2.075 1.463-3.538Q9.925 1 12 1t3.538 1.462Q17 3.925 17 6v2h3v14ZM9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6Zm3 9q.825 0 1.413-.587Q14 15.825 14 15q0-.825-.587-1.413Q12.825 13 12 13q-.825 0-1.412.587Q10 14.175 10 15q0 .825.588 1.413Q11.175 17 12 17Z'%3E%3C/path%3E%3C/svg%3E");
        flex-basis: 16px;
        min-width: 16px;
        width: 16px;
        height: 16px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: contain;
        transform: translateY(-2px);
    }

    .main-modal-footer em {
        font-size: 1.6em;
        font-weight: bold;
        font-style: normal;
    }

    .main-modal-row {
        display: flex;
        gap: 1rem;
        justify-content: center;
        align-items: center;
    }

    .compensate-for-scrollbar {
        padding-right: 0 !important;
    }

    .video-case {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        z-index: 1;
    }

    .video-case a {
        display: block;
        width: 100%;
        height: 100%;
        position: relative;
    }

    .video-case a .videos-block,
    .video-case a .videos-block .videos-image-wrapper,
    .video-case a .videos-block .videos-image-wrapper picture {
        height: 100%;
    }

    .video-case a .videos-block {
        position: relative;
    }

    .video-case a .videos-block .videos-image-wrapper {
        max-height: 100%;
    }

    .video-case a .videos-block .videos-image-wrapper picture {
        display: block;
        transition: transform 0.3s;
    }

    .video-case a:hover .videos-block .videos-image-wrapper picture {
        transform: scale(1.05, 1.05);
    }

    .video-case a .videos-block .videos-caption .videos-heading,
    .video-case a .videos-block .videos-caption {
        height: 0;
        padding: 0;
        visibility: hidden;
        opacity: 0;
    }

    .video-case a .videos-play-button {
        opacity: 1;
    }

    .video-case a .videos-block:after {
        content: none !important;
    }

    @media (min-width: 1200px) {
        .video-case a .videos-block .videos-image-wrapper {
            height: 442px;
        }
    }

    @media (max-width: 992px) {
        .video-case {
            height: 300px;
        }
    }

    @media (max-width: 768px) {
        .video-case {
            height: 200px;
        }
    }

    @media (max-width: 576px) {
        .table {
            margin: 1rem 0;
        }

        .adactive-cards {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .adactive-cards>td {
            width: 100% !important;
        }

        .table td,
        .table th {
            padding: 0.25rem 0.5rem !important;
        }

        .table td p,
        .table th p {
            font-size: 14px !important;
        }

        .video-case {
            height: 250px;
        }
    }
    @media (max-width: 576px) {
        .fancybox__slide {
            padding: 0 !important;
        }
        .fancybox__content {
            border-radius: 0px !important;
        }
        .fancybox__content>.carousel__button.is-close{
            top: 0 !important;
            right: 7px;
            position: fixed !important;
        }
        .main-modal-input textarea{
            max-height: 40px;
        }

    }
    @media (max-width: 480px) {
        .video-case {
            height: 170px;
        }
    }
</style><style>

    .main-modal h2{
        font-size: 1.7rem;
        font-weight: bold;
        text-align: center;
        padding: 0;
    }
    .main-modal-input .parsley-errors-list[aria-hidden="false"]{
        margin-bottom: -14px;
    }
    .main-modal-input .parsley-custom-error-message{
        list-style-type: none;
        font-size: 9px;
        color: red;
    }

    .main-modal .button-default{
        display: block;
        margin-inline: auto;
    }
    .main-modal .c-form-policy{
        text-align: center;
        border-top: 1px solid #eee;
        padding: 0;
        margin-top: 2rem;
    }
    .main-modal .c-form-policy a{
        display: inline-block;
    }

    @media (min-width: 1024px){
        .fancybox__slide {
            padding: 30px 100px;
        }
    }
</style>
<div class="main-modal" id="main-modal" style="display:none; ">
    <style>

        .c-form input,
        .c-form select,
        .c-form textarea {
            width: 100%;
            font-size: 12.5px;
            padding: 9px 10px 9px 11px;
            border-radius: 4px;
            border-color: var(--c-border);
            color: #313131;
            min-height: 33px;
            height: 33px;
            background-color: #fff;
            border-width: 1px;
            border-style: solid;
            font-family: "Gotham Pro", -apple-system, BlinkMacSystemFont, "Segoe UI",Roboto, "Helvetica Neue", Arial, sans-serif;
            box-sizing: border-box;
        }

        .c-form select{
            padding-top: 8px;
        }

        .c-form-label{
            display: block;
            color: #777;
            font-size: 13px;
            margin-bottom: 0;
        }

        .c-form-label sup{
            color: red;
        }

        .c-form-list{
            padding: 0;
            margin: 0;
        }

        .c-form-item{
            list-style-type: none;
            margin-bottom: 0.75rem;
        }
        .c-form-item .parsley-errors-list{
            padding: 0;
        }
        .c-form-item .parsley-custom-error-message{
            list-style-type: none;
            font-size: 9px;
            color: red;
        }
        .c-form-item .parsley-custom-error-message:before{
            display: none !important;
            opacity: 0 !important;
        }

        .c-form-label{
            color: #777;
            font-size: 13px;
            margin-bottom: 0;
        }

        .c-form-policy {
            padding: 1rem 0 0;
        }

        .c-form-policy a:hover{
            color: var(--c-link);
        }

        .c-form textarea{
            height: 100px;
        }

        .c-form-policy p{
            font-size: 11px;
            margin: 1rem 0 0;
            letter-spacing: 0.2px;
        }

        .c-form-policy p strong{
            font-size: 150%;
        }

        .c-form-policy .icon{
            position: relative;
            top: 1px;
            width: 13px;
            height: 13px;
            right: inherit;
            margin-right: 4px;
            float: left;
        }

        .c-form-date{
            max-width: 300px;
            margin: 0 auto 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto;
            grid-column-gap: 1rem;
            grid-row-gap: 0.5rem;
        }
        .c-form-date p{
            grid-column: 1 / 3;
            font-weight: bold;
            text-align: center;
            font-size: 12px;
            font-style: italic;
            padding-bottom: 5px;
            color: #777;
            margin: 0;
        }

    </style>



    <form id="form-id" class="c-form" data-parsley-validate>
        <h2>Заполните заявку</h2>

        <ul class="c-form-list">
            <li class="c-form-item">
                <input type="hidden" name="form-id" value="form-id">
            </li>
            <li class="c-form-item">
                <input type="hidden" name="check" value="bot" id="checkinput">
            </li>

            <li class="c-form-item">
                <label class="c-form-label">
                    Ваше имя
                    <sup>*</sup>
                </label>
                <input type="text" id="name" name="name" placeholder="Как к вам обращаться" required data-parsley-trigger="change" data-parsley-error-message="Укажите своё имя">
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Компания
                    <sup>*</sup>
                </label>
                <input type="text" id="company" name="company" placeholder="Ваша компания" required data-parsley-trigger="change" data-parsley-error-message="Укажите название компании">
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Количество сотрудников
                    <sup>*</sup>
                </label>
                <select id="number" name="number" required data-parsley-trigger="change" data-parsley-error-message="Укажите количество сотрудников">
                    <option value="Количество сотрудников" selected disabled>
                        Количество сотрудников
                    </option>
                    <option value="0-100">
                        0-100
                    </option>
                    <option value="100-500">
                        100-500
                    </option>
                    <option value="500-1500">
                        500-1500
                    </option>
                    <option value="1500-5000">
                        1500-5000
                    </option>
                    <option value="5000+">
                        5000+
                    </option>
                </select>
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Телефон
                    <sup>*</sup>
                </label>
                <input type="tel" id="phone" name="phone" placeholder="" required data-parsley-trigger="change" data-parsley-pattern="^\+7\(\d{3}\)\d{3}-\d{2}-\d{2}$" data-parsley-error-message="Укажите номер телефона">
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Корпоративный e-mail
                    <sup>*</sup>
                </label>
                <input type="email" id="email" name="email" placeholder="Ваш e-mail" required data-parsley-trigger="change" data-parsley-pattern="/^(?!.*@(gmail\.com|yahoo\.com|rambler\.ru|mail\.ru|yandex\.ru|ya\.ru)$)[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/" data-parsley-error-message="Укажите корпоративный e-mail">
            </li>
            <li class="c-form-item">
                <label class="c-form-label">
                    Комментарий
                </label>
                <textarea id="comment" name="comment"></textarea>
            </li>
            <li class="c-form-item">
                <label class="c-form-label">

                </label>
                <div class="c-form-date" style="display:none;">


                    <p>Вы также можете указать время,<br>в которое вам будет удобнее принять звонок </p>
                    <div class="c-form-date-column">
                        <input type="date" id="current-date" name="current-date" value="2024-03-27" min="2024-03-27">
                    </div>

                    <div class="c-form-date-column">
                        <select id="time" name="time">
                            <option value="9:00">
                                9:00
                            </option>
                            <option value="9:15">
                                9:15
                            </option>
                            <option value="9:30">
                                9:30
                            </option>
                            <option value="9:45">
                                9:45
                            </option>
                            <option value="10:00">
                                10:00
                            </option>
                            <option value="10:15">
                                10:15
                            </option>
                            <option value="10:30">
                                10:30
                            </option>
                            <option value="10:45">
                                10:45
                            </option>
                            <option value="11:00">
                                11:00
                            </option>
                            <option value="11:15">
                                11:15
                            </option>
                            <option value="11:30">
                                11:30
                            </option>
                            <option value="11:45">
                                11:45
                            </option>
                            <option value="12:00">
                                12:00
                            </option>
                            <option value="12:15">
                                12:15
                            </option>
                            <option value="12:30">
                                12:30
                            </option>
                            <option value="12:45">
                                12:45
                            </option>
                            <option value="13:00">
                                13:00
                            </option>
                            <option value="13:15">
                                13:15
                            </option>
                            <option value="13:30">
                                13:30
                            </option>
                            <option value="13:45">
                                13:45
                            </option>
                            <option value="14:00">
                                14:00
                            </option>
                            <option value="14:15">
                                14:15
                            </option>
                            <option value="14:30">
                                14:30
                            </option>
                            <option value="14:45">
                                14:45
                            </option>
                            <option value="15:00">
                                15:00
                            </option>
                            <option value="15:15">
                                15:15
                            </option>
                            <option value="15:30">
                                15:30
                            </option>
                            <option value="15:45">
                                15:45
                            </option>
                            <option value="16:00">
                                16:00
                            </option>
                            <option value="16:15">
                                16:15
                            </option>
                            <option value="16:30">
                                16:30
                            </option>
                            <option value="16:45">
                                16:45
                            </option>
                            <option value="17:00">
                                17:00
                            </option>
                            <option value="17:15">
                                17:15
                            </option>
                            <option value="17:30">
                                17:30
                            </option>
                            <option value="17:45">
                                17:45
                            </option>
                            <option value="18:00">
                                18:00
                            </option>
                        </select>
                    </div>

                </div>
            </li>
        </ul>
        <button id="form-id-submit" type="submit" class="button-default">Отправить</button>

        <div class="c-form-policy">
            <p>
                Нажимая на кнопку «Отправить», Вы даете согласие на обработку своих персональных данных.
                <br>
                <a href="/privacy-policy/"><i class="icon icon-lock"></i>Политика конфиденциальности</a>
            </p>
            <p>
                Или пишите нам на почту
                <br>
                <strong>
                    <a href="mailto:sales@happy-job.ru">sales@happy-job.ru</a>
                </strong>
            </p>
        </div>
    </form>


    <!-- /12. Форма Протестируйте бесплатно -->

    <script>
        $(function() {

            const getSubDomain = (url) => {
                const urlObj = new URL(url);
                const segments = urlObj.pathname.split('/').filter(part => part.length > 0);
                return segments.length > 0 ? segments[0] : null;
            };

            const sendMetrik = (formNodeID, formURL) => {
                switch (formNodeID) {
                    case 'compare-index':
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventCategory': 'click',
                            'eventAction': 'index'
                        });
                        console.log('Метрика “Сравните себя” в отрасли')
                        break;
                    case 'form-id':
                        dataLayer.push({'event': 'GAevent', 'eventCategory': 'form', 'eventAction': 'request'});
                        console.log('Метрика “Заполните заявку” на всех страницах сайта')
                        break;
                    case 'free-demo':
                        dataLayer.push({'event': 'GAevent', 'eventCategory': 'form', 'eventAction': 'free_demo'});
                        console.log('Метрика “Протестируйте бесплатно” внизу страниц сайта')
                        break;
                    case 'hrbrand':
                        dataLayer.push({'event': 'GAevent', 'eventCategory': 'form', 'eventAction': 'request'});
                        console.log('Метрика со страницы платформ')
                        break;
                    case 'trend':
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventCategory': 'trend',
                            'eventAction': 'reportform'
                        });
                        console.log('Метрика Типы исследований')
                        break;
                    default:
                        switch (formURL) {
                            case 'types-of-surveys':
                                dataLayer.push({'event': 'GAevent', 'eventCategory': 'form', 'eventAction': 'request'});
                                console.log('Метрика со страницы платформ');
                                break;
                            default:
                                console.log('?? metrika ??')
                                break;
                        }
                        console.log('?? metrika ??')
                        break;
                }
            };

            const maskOptions = {
                mask: "+{7}(000)000-00-00",
                lazy: false,
                placeholderChar: "_",
            };

            let inputFields = document.querySelectorAll('#form-id input[type="tel"]');
            console.log(inputFields)
            let imaskArr = [];
            inputFields.forEach((input) => {
                imaskArr.push(IMask(input, maskOptions))
            });

            /* ОБРАБОТКА ПОЛЕЙ СО ВРЕМЕНЕМ */

            const currentDateInput = document.getElementById('current-date');
            const timeSelect = document.getElementById('time');

            const currentDate = new Date().toISOString().slice(0, 10);
            currentDateInput.value = currentDate;
            currentDateInput.min = currentDate;

            function setOptions() {
                const currentTime = new Date().getHours() * 60 + new Date().getMinutes();
                let closestTimeOption = null;
                let closestTimeDiff = Infinity;

                for (let i = 0; i < timeSelect.options.length; i++) {
                    const timeOption = timeSelect.options[i];
                    const timeValue = timeOption.value.split(':').map(Number);
                    const timeMinutes = timeValue[0] * 60 + timeValue[1];

                    if (currentDateInput.value === currentDate && timeMinutes <= currentTime) {
                        timeOption.disabled = true;
                        timeOption.hidden = true;
                    } else {
                        timeOption.disabled = false;
                        timeOption.hidden = false;

                        const timeDiff = timeMinutes - currentTime;
                        if (timeDiff > 0 && timeDiff < closestTimeDiff) {
                            closestTimeDiff = timeDiff;
                            closestTimeOption = timeOption;
                        }
                    }
                }

                if (closestTimeOption !== null) {
                    closestTimeOption.selected = true;
                } else {
                    timeSelect.options[timeSelect.options.length - 1].selected = true;
                }
            }

            setOptions();

            currentDateInput.addEventListener('change', function() {
                const selectedDate = new Date(this.value);
                const today = new Date();
                const tomorrow = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 1);
                const selectedTime = timeSelect.value;
                let closestTimeOption = null;
                let closestTimeDiff = Infinity;

                for (let i = 0; i < timeSelect.options.length; i++) {
                    const timeOption = timeSelect.options[i];
                    const timeValue = timeOption.value.split(':').map(Number);
                    const timeMinutes = timeValue[0] * 60 + timeValue[1];

                    if (selectedDate < tomorrow) {
                        if (selectedDate.getTime() === today.getTime() && timeMinutes <= currentTime) {
                            timeOption.disabled = true;
                            timeOption.hidden = true;
                        } else {
                            timeOption.disabled = false;
                            timeOption.hidden = false;
                            const timeDiff = timeMinutes - currentTime;
                            if (timeDiff > 0 && timeDiff < closestTimeDiff) {
                                closestTimeDiff = timeDiff;
                                closestTimeOption = timeOption;
                            }
                        }
                    } else {
                        timeOption.disabled = false;
                        timeOption.hidden = false;
                    }
                }

                if (closestTimeOption !== null) {
                    closestTimeOption.selected = true;
                } else {
                    // Если нет доступного времени, выбрать последнюю опцию
                    timeSelect.options[timeSelect.options.length - 1].selected = true;
                }
            });
            const checkWorkTime = (formNodeID) => {
                const now = new Date();
                const startWorkTime = new Date();
                startWorkTime.setHours(9, 0, 0, 0);
                const endWorkTime = new Date();
                endWorkTime.setHours(18, 0, 0, 0);

                if (now >= startWorkTime && now <= endWorkTime && formNodeID === 'trend') {
                    return "Менеджер направит отчет на указанную почту до конца рабочего дня";
                } else if(now >= startWorkTime && now <= endWorkTime) {
                    return "Менеджер свяжется с вами в ближайшее время";
                }
                else {
                    return "Наш менеджер свяжется с вами в рабочее время с 09:00 - 18:00 по Москве";
                }
            }

            const sendForm = (formNode, formData, formNodeID, formURL) => {
                fetch('/ajax', {
                    method: 'POST',
                    body: formData
                })
                    .then(function(response) {
                        if (!response.ok) {
                            throw new Error('Ошибка HTTP: ' + response.status);
                        }

                        return response.json();
                    })
                    .then(function(data) {
                        if (data.status === 'error') {
                            Swal.fire('Ошибка отправки!', data.msg, data.status);
                        } else if (data.status === 'success') {
                            const timeStatus = checkWorkTime(formNodeID);
                            console.log(formNodeID);
                            sendMetrik(formNodeID, formURL);

                            if(formNodeID === 'trend'){
                                Swal.fire('Благодарим за заявку!', timeStatus, data.status);
                            } else {
                                Swal.fire('Благодарим за оставленную заявку!', timeStatus, data.status);
                            }
                        }
                        $("#form-id").find('input[type="text"], input[type="phone"], textarea').val('');
                        inputFields = document.querySelectorAll('input[type="tel"]');
                        inputFields.forEach((input) => {
                            IMask(input, maskOptions);
                        });

                        ym(46152993, 'reachGoal', 'mainpage_send_topform');
                    })
                    .catch(function(error) {
                        console.log('sendForm :: errors (catch): ');
                        console.log(error);

                        console.error('Ошибка отправки данных на сервер:', error);
                        Swal.fire({
                            icon: 'question',
                            title: 'А вот это уже интересно',
                            text: error.toString(),
                        });
                        ym(46152993, 'reachGoal', 'event_error');
                    });
            };

            // 1
            $('#form-id input').on('input', function() {
                const Form = $('#form-id').parsley();
            });


            // 2
            $('#form-id-submit').on('click', function(event){
                const Form = $('#form-id').parsley();

                if (Form.isValid()) {
                    formSubmitHandler(event)
                }
            })

            function formSubmitHandler(event) {
                event.preventDefault();

                $(document).find('.main-modal .is-close').trigger('click');
                $(document).find('#prices-form .is-close').trigger('click');
                const formNode = document.getElementById('form-id');
                const formData = new FormData(formNode);
                const formNodeID ='form-id';
                const formURL = window.location.href;
                sendForm(formNode, formData, formNodeID, formURL);
                console.log('Отправилось!'); // file?
                imaskArr.forEach((elem) => {
                    elem.value = "";
                    elem.updateValue();
                })
                formNode.reset();
            }
        });
    </script></div><div class="main-modal" id="get-email" style="display:none; ">
    <div class="main-modal-flow">
        <header class="main-modal-header">
            <h2 class="main-modal-title">Оставьте e-mail</h2>
            <p style="text-align: center;">и продолжите чтение</p>
        </header>
        <form class="main-modal-form" id="modal-email">
            <div class="main-modal-item">
                <div class="main-modal-input">
                    <label for="email" class="main-modal-label">Ваш e-mail:<sup>*</sup></label>
                    <input id="email" name="email" type="email" placeholder="Ваш e-mail" required>
                </div>
            </div>
            <div class="main-modal-item">
                <div class="main-modal-input -submit-button">
                    <button class="button button-default">Отправить</button>
                </div>
            </div>
        </form>
        <div class="main-modal-divider"></div>
        <footer class="main-modal-footer">
            <p>Нажимая на кнопку «Отправить», Вы даете согласие на обработку своих персональных данных.</p>
            <p><a href="/privacy-policy/"><b class="privacy-policy-icon"></b> Политика конфиденциальности</a></p>
            <p>Или пишите нам на почту:</p>
            <p><em><a href="mailto:sales@happy-job.ru">sales@happy-job.ru</a></em></p>
        </footer>
    </div>
</div>


<script>
    $(function () {
        $("#modal-email").on("submit", function (event) {
            event.preventDefault();
            let formData = {};
            $(this).serializeArray().map(function (x) {
                formData[x.name] = x.value;
            })
            console.log(formData);
            $.ajax({
                url: "/ajax",
                method: "POST",
                dataType: "json",
                data: formData,
            }).done(function (resp) {
                $(document).find('.carousel__button.is-close').trigger('click');

                ym(69351811, 'reachGoal', 'event_send_form');

                if (resp.status === "success") {
                    Swal.fire(
                        'Отлично! ',
                        'Желаем приятного чтения',
                        'success'
                    )
                    $('.article-hide-content').addClass('active');
                    $('.show-article').hide();
                    $("#get-email").find('input[type="text"], input[type="phone"], input[type="email"], textarea').val('');
                    ym(46152993, 'reachGoal', 'mainpage_send_topform');
                    localStorage.setItem('happy-articlee-read', 1);
                    $('.article-hide-content').addClass('active');
                    $('.show-article, #modal-email').hide();

                }
                if (resp.status === "error") {
                    let message = resp.msg;
                    Swal.fire({
                        icon: 'error',
                        title: 'Упс!',
                        text: message,
                    });
                    ym(46152993, 'reachGoal', 'event_error')
                    $('.article-hide-content').addClass('active');
                    $('.show-article, #modal-email').hide();
                }
                if ((resp.status !== "success") && (resp.status !== "error")) {
                    let message = resp.msg;
                    Swal.fire({
                        icon: 'question',
                        title: 'А вот это уже интересно',
                        text: message,
                    })
                    ym(46152993, 'reachGoal', 'event_error')
                }
            });
            return false
        });
    })
</script><script src="https://www.google.com/recaptcha/api.js?render=6Le6d_gaAAAAAKOZFwTtVob1nLTWnMFhppylmKt4"></script>
<script async type="text/javascript" src="/js/0f83699923be789d2b9f6d89ce43f38e.js"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(46152993, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46152993" style="position:absolute; left:-9999px;" alt=""></div></noscript>
<!-- /Yandex.Metrika counter -->
<script src="/jquery/imask.js"></script>
<script src="/jquery/parsley/parsley.min.js"></script>
<link rel="stylesheet" href="/jquery/niceSelect/style.css">
<script src="/jquery/niceSelect/jquery.nice-select.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.addEventListener('mouseup', checkSelection);
        document.addEventListener('touchend', checkSelection);
        function checkSelection() {
            var selectedText = '';
            if (window.getSelection) {
                selectedText = window.getSelection().toString();
            } else if (document.selection && document.selection.type != "Control") {
                selectedText = document.selection.createRange().text;
            }
            if (isValidEmail(selectedText)) {
                console.log('выделен текст содержащий email')
                ym(46152993, 'reachGoal', 'event_textselect_slaesemail');
                console.log('вызов яндекс-метрики для выделенного email')
            }
        }
        function isValidEmail(text) {
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(text);
        }
    });
</script>
</body>
</html>

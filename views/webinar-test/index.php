<?php
$this->title = 'Вебинары для HR и руководителей | Happy Job';
?>
<div class="container mainc">
    <main>
        <style>
            .webinars-header {
                display: grid;
                overflow: hidden;
                place-items: center;
                width: 100vw;
                left: -50vw;
                margin-left: 50%;
                position: relative;
                border-bottom: 5px solid #e4e4e4;
                margin-bottom: clamp(1rem, 0.4681rem + 1.7021vw, 2rem);
            }

            .webinars-header>* {
                grid-column: 1 / 2;
                grid-row: 1 / 2;
            }

            .webinars-header>img {
                object-fit: cover;
                z-index: -1;
            }

            @media (max-width: 1440px) {
                .webinars-header>img {
                    aspect-ratio: 4 / 1;
                }
            }

            @media (max-width: 1200px) {
                .webinars-header>img {
                    aspect-ratio: 3 / 1;
                }
            }

            @media (max-width: 992px) {
                .webinars-header>img {
                    aspect-ratio: 3 / 1;
                }
            }

            .webinars-title h1 {
                color: #fff;
                font-weight: 300;
                font-size: clamp(1.875rem, 0.8777rem + 3.1915vw, 3.75rem);
                line-height: 1;
                letter-spacing: -0.014em;
                margin: 0;
            }

            .webinars-page {
                max-width: 1120px;
                margin: 1.5rem auto 0;
                display: grid;
                grid-gap: 2rem;
                padding: clamp(1rem, 0.4681rem + 1.7021vw, 2rem) 0;
            }

            @media (min-width: 1200px) {
                .webinars-title {
                    width: 1120px;
                }

                .webinars-title h1 {
                    max-width: 50%;
                }

                .webinars-page {
                    grid-template-columns: 25% 75%;
                }
            }

            @media (min-width: 1200px) {
                .webinars-aside.fixed .webinars-menu {
                    position: fixed;
                    /**/
                    top: 9rem;
                }

                .webinars-aside.menu-bottom {
                    position: relative;
                }

                .webinars-aside.menu-bottom .webinars-menu {
                    position: absolute;
                    bottom: 0;
                }
            }

            @media (max-width: 1200px) {
                .webinars-aside {
                    display: none;
                }
            }

            .webinars-menu {
                margin: 0 0 0 -1rem;
                padding: 0;
            }

            .webinars-menu li {
                display: flex;
                align-items: center;
                padding: 9px;
                position: relative;
                width: 100%;
                margin: 0;
                line-height: 1;
            }

            .webinars-menu li:before {
                position: static !important;
                content: "";
                background-color: transparent !important;
                display: inline-block;
                transform: translateY(-1px);
                flex-basis: 1.2rem;
                min-width: 1.2rem !important;
                height: 1.2rem;
                background-repeat: no-repeat;
                background-position: center center;
                background-size: contain;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--material-symbols' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%23666' d='M8.7 17.3q-.275-.275-.275-.7q0-.425.275-.7l3.9-3.9l-3.9-3.9q-.275-.275-.275-.7q0-.425.275-.7q.275-.275.7-.275q.425 0 .7.275l4.6 4.6q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.7.275q-.425 0-.7-.275Z'%3E%3C/path%3E%3C/svg%3E");
                opacity: 0.5;
                left: initial;
                top: initial;
            }

            .webinars-menu a {
                position: relative;
                color: #666;
                text-decoration: none;
                padding: 3px 3px 3px 0;
                cursor: pointer;
                transition: all 0.3s;
            }

            .webinars-menu a:before {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                height: 2px;
                width: 0;
                background-color: #666;
                transition: all 0.1s;
                opacity: 0;
            }

            .webinars-menu a:hover,
            .webinars-menu a.is-active {
                color: #000;
            }

            .webinars-menu a:hover:before {
                width: 100%;
                background-color: #000;
            }

            .webinars-content {
                overflow: hidden;
            }

            .webinars-content-header {
                padding-bottom: clamp(1rem, 0.4681rem + 1.7021vw, 2rem);
            }

            .webinars-title,
            .webinars-content-title {
                font-size: clamp(1.5rem, 1.234rem + 0.8511vw, 2rem);
                margin: 0 0 clamp(1.5rem, 1.234rem + 0.8511vw, 2rem);
                line-height: 1.2;
                font-weight: 300;
                padding: 0;
                color: #1d2127;
            }

            .announcement {
                background-color: #eeeff3;
                background: url() 1rem 1rem no-repeat #eeeff3;
                background-size: 190px 190px;
                padding: clamp(1rem, 0.5714285714285714rem + 2.142857142857143vw, 2.5rem);
                padding-left: 0;
                position: relative;
                overflow: hidden;
                display: flex;
            }

            .announcement>* {
                position: relative;
                z-index: 1;
            }

            .announcement__images {
                width: 30%;
            }

            .announcement .announcement__content {
                flex: 1;
            }

            .announcement__img {
                width: 180px;
                height: 180px;
                margin: -1em 0 2.5em 1.5em;
                z-index: 0;
                background-color: #eeeff3;
                background: url() center no-repeat #eeeff3;
                background-size: cover;
                border-radius: 50%;
            }

            @media (max-width: 860px) {
                .announcement__img {
                    width: 150px;
                    height: 150px;
                    margin: 0 0 1em 2em;
                }
            }

            @media (min-width: 577px) {
                .announcement {
                    border-radius: 120px 0 120px 0;
                    min-height: 230px;
                }


            }

            @media (max-width: 576px) {
                .announcement {
                    border-radius: 60px 0 60px 0;
                }
                .webinars-title h1{
                    width: 100% !important;
                    white-space: nowrap;
                    padding-left: 0 !important;
                    transform: translateX(-3rem);
                }

            }

            .announcement h2 {
                padding: 0;
                font-size: clamp(1.25rem, 1.0505rem + 0.6383vw, 1.625rem);
                font-weight: 600;
            }

            .announcement h3 {
                font-size: 1.25rem;
                margin: 1rem 0;
            }

            .announcement details {
                margin-bottom: 1rem;
            }

            .announcement-details p,
            .announcement-details li {
                font-size: 14px;
                font-weight: 400;
            }

            .announcement summary {
                cursor: pointer;
                font-weight: 600;
                margin-bottom: 1rem;
            }

            .announcement-date {
                display: flex;
                align-items: center;
                margin: 0 0 1rem;
            }

            .announcement-button,
            .announcement-button:focus {
                background-color: #61c13b;
                outline-color: #61c13b;
                display: inline-block;
                color: #fff;
                text-transform: uppercase;
                padding: 0.7rem 1.2rem 0.6rem;
                border-radius: 6px;
                border-bottom: 3px solid green;
                font-weight: 500;
            }

            .announcement-button:hover {
                color: #fff;
            }

            .announcement-button:active {
                color: #fff;
                border-bottom: 0px solid green;
                position: relative;
                margin-top: 3px;
            }

            .announcement-date svg {
                transform: translateY(-2px);
            }

            .announcement-date svg {
                transform: translateY(-2px);
            }

            .webinars-list-wrapper {
                position: relative;
                padding-top: 3rem;
            }

            .webinars-list-controls {
                position: absolute;
                top: 3rem;
                right: 2px;
                display: flex;
                gap: 1rem;
                align-items: center;
                justify-content: center;
            }

            .webinars-list-controls label {
                cursor: pointer;
                padding: 0.2rem 0.4rem;
                outline: 1px solid #666;
                border-radius: 4px;
                transition: background-color 0.3s;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                width: 3rem;
                height: 2.5rem;
                box-sizing: border-box;
                text-align: center;
            }

            .webinars-list-controls label path {
                fill: #666;
                transition: fill 0.3s;
            }

            .webinars-list-controls label:hover,
            .webinars-list-controls label.is-active {
                background-color: #61c13b;
                outline-color: #61c13b;
                border-bottom: 3px solid green;
            }

            .webinars-list-controls label:active,
            .webinars-list-controls label.is-active:active {
                border-bottom: 0px solid green;
                transform: translateY(3px);
                position: relative;
            }

            .webinars-list-controls label:hover path,
            .webinars-list-controls label.is-active path {
                fill: #fff;
            }

            .webinar-view {
                display: none;
            }

            .webinars-list {
                margin: 0;
                padding: 0;
                list-style-type: none;
            }

            #webinar-view-list:checked~.webinars-list {
                display: flex;
                flex-direction: column;
                gap: 1.5rem;
            }

            #webinar-view-blocks:checked~.webinars-list {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                grid-gap: 1.5rem;
            }

            .webinars-item {
                padding: 0.5rem;
                border-radius: 1rem;
                margin: 0;
            }

            .webinars-item.-job {
                background-color: #61c13a3b;
                transition: all 0.3s;
            }

            .webinars-item.-job:hover {
                box-shadow: inset 0 0 0 2px #4dd914;
                transform: translateY(-2px);
            }

            .webinars-item.-service {
                background-color: rgba(53, 95, 229, 0.149);
                transition: all 0.3s;
            }

            .webinars-item.-service:hover {
                box-shadow: inset 0 0 0 2px #355fe5;
                transform: translateY(-2px);
            }

            .webinars-item.-feedbackx {
                background-color: rgb(55, 202, 226, 0.190);
                transition: all 0.3s;
            }

            .webinars-item.-feedbackx:hover {
                box-shadow: inset 0 0 0 2px #37cae2;
                transform: translateY(-2px);
            }

            .webinars-item.selected {
                display: none;
            }

            .webinars-item.selected.is-active {
                display: block;
            }

            .webinar {
                text-decoration: none;
                color: currentColor;
            }

            #webinar-view-list:checked~.webinars-list .webinar {
                display: grid;
                grid-template-columns: 200px 1fr;
                grid-template-rows: 1fr 1fr;
                grid-template-areas: "image title" "image data";
                grid-row-gap: 0.5rem;
                grid-column-gap: clamp(1.5rem, 1.234rem + 0.8511vw, 2rem);
            }

            #webinar-view-blocks:checked~.webinars-list .webinar {
                display: grid;
                grid-template-columns: 1fr;
                grid-template-rows: 95px auto auto;
                grid-template-areas: "image" "title" "data";
                grid-gap: 0.5rem;
            }

            .webinar-image {
                position: relative;
                grid-area: image;
                margin: 0;
                border-radius: 10px;
                overflow: hidden;
                height: 106px;
            }

            #webinar-view-blocks:checked~.webinars-list .webinar-image {
                height: 95px;
            }

            .webinar-image img {
                position: absolute;
                inset: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .webinar-image:before,
            .webinar-image:after {
                content: "";
                display: none;
                position: absolute;
                width: 56px;
                height: 56px;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }

            .webinar-image:before {
                background-color: #243642;
                opacity: 0.18;
                transition: transform 0.2s linear;
                z-index: 5;
                border-radius: 50%;
                z-index: 1;
                transition: background-color 0.3s;
            }

            .webinar-image:after {
                background-repeat: no-repeat;
                background-position: center center;
                background-size: contain;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='currentColor' d='M8 6.82v10.36c0 .79.87 1.27 1.54.84l8.14-5.18a1 1 0 0 0 0-1.69L9.54 5.98A.998.998 0 0 0 8 6.82z'%3E%3C/path%3E%3C/svg%3E");
                z-index: 2;
                transition: background-image 0.3s;
            }

            .webinar:hover .webinar-image:before {
                background-color: #243642;
            }

            .webinar:hover .webinar-image:after {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--ic' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'%3E%3Cpath fill='%23fff' d='M8 6.82v10.36c0 .79.87 1.27 1.54.84l8.14-5.18a1 1 0 0 0 0-1.69L9.54 5.98A.998.998 0 0 0 8 6.82z'%3E%3C/path%3E%3C/svg%3E");
            }

            .webinar:hover .webinar-image img {
                background-size: 105% 105%;
            }

            .webinar-title {
                font-size: 18px;
                line-height: 1.2;
                font-weight: normal;
                grid-area: title;
                margin: 0;
            }

            #webinar-view-list:checked~.webinars-list .webinar-title {
                align-self: end;
            }

            #webinar-view-blocks:checked~.webinars-list .webinar-title,
            #webinar-view-blocks:checked~.webinars-list .webinar-duration {
                font-size: 12px;
            }

            #webinar-view-blocks:checked~.webinars-list .webinar {
                position: relative;
            }

            #webinar-view-blocks:checked~.webinars-list .webinar-duration {
                position: absolute;
                right: 0.5rem;
                top: 70px;
                background-color: rgba(255, 255, 255, 0.85);
                border-radius: 3px;
                z-index: 1;
                color: #000;
                grid-area: image;
                padding: 0 0.3rem;
                font-size: 11px;
            }

            #webinar-view-blocks:checked~.webinars-list .webinar-duration:before {
                content: "";
                width: 1rem;
                flex-basis: 1rem;
                height: 1rem;
                opacity: 1;
                background-repeat: no-repeat;
                background-position: center center;
                background-size: contain;
                background-image: url(data:image/svg + xml,
                %3Csvgxmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--wi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 30 30" %3E%3Cpathfill="%23000" d="M3.74 14.47c0-2.04.51-3.93 1.52-5.66s2.38-3.1 4.11-4.11s3.61-1.51 5.64-1.51c1.52 0 2.98.3 4.37.89s2.58 1.4 3.59 2.4s1.81 2.2 2.4 3.6s.89 2.85.89 4.39c0 1.52-.3 2.98-.89 4.37s-1.4 2.59-2.4 3.59s-2.2 1.8-3.59 2.39s-2.84.89-4.37.89c-1.53 0-3-.3-4.39-.89s-2.59-1.4-3.6-2.4s-1.8-2.2-2.4-3.58s-.88-2.84-.88-4.37zm2.48 0c0 2.37.86 4.43 2.59 6.18c1.73 1.73 3.79 2.59 6.2 2.59c1.58 0 3.05-.39 4.39-1.18s2.42-1.85 3.21-3.2s1.19-2.81 1.19-4.39s-.4-3.05-1.19-4.4s-1.86-2.42-3.21-3.21s-2.81-1.18-4.39-1.18s-3.05.39-4.39 1.18S8.2 8.72 7.4 10.07s-1.18 2.82-1.18 4.4zm7.92 0V7.81c0-.23.08-.43.24-.59s.36-.24.59-.24s.43.08.59.24s.24.36.24.59v6.15l3.59 2.09c.2.12.32.29.38.51s.03.43-.09.62c-.16.28-.4.42-.72.42c-.17 0-.31-.04-.42-.12l-3.82-2.23c-.17-.05-.31-.15-.42-.29s-.16-.3-.16-.49z" %3E%3C/path%3E%3C/svg%3E);
            }

            .webinar-duration {
                align-self: flex-start;
                grid-area: data;
                display: flex;
                align-items: center;
                gap: 0.25rem;
                color: rgba(60, 60, 60, 0.47);
            }

            .webinar-duration:before {
                content: "";
                width: 24px;
                flex-basis: 24px;
                height: 24px;
                opacity: 0.5;
                background-repeat: no-repeat;
                background-position: center center;
                background-size: contain;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--wi' width='32' height='32' preserveAspectRatio='xMidYMid meet' viewBox='0 0 30 30'%3E%3Cpath fill='%23666' d='M3.74 14.47c0-2.04.51-3.93 1.52-5.66s2.38-3.1 4.11-4.11s3.61-1.51 5.64-1.51c1.52 0 2.98.3 4.37.89s2.58 1.4 3.59 2.4s1.81 2.2 2.4 3.6s.89 2.85.89 4.39c0 1.52-.3 2.98-.89 4.37s-1.4 2.59-2.4 3.59s-2.2 1.8-3.59 2.39s-2.84.89-4.37.89c-1.53 0-3-.3-4.39-.89s-2.59-1.4-3.6-2.4s-1.8-2.2-2.4-3.58s-.88-2.84-.88-4.37zm2.48 0c0 2.37.86 4.43 2.59 6.18c1.73 1.73 3.79 2.59 6.2 2.59c1.58 0 3.05-.39 4.39-1.18s2.42-1.85 3.21-3.2s1.19-2.81 1.19-4.39s-.4-3.05-1.19-4.4s-1.86-2.42-3.21-3.21s-2.81-1.18-4.39-1.18s-3.05.39-4.39 1.18S8.2 8.72 7.4 10.07s-1.18 2.82-1.18 4.4zm7.92 0V7.81c0-.23.08-.43.24-.59s.36-.24.59-.24s.43.08.59.24s.24.36.24.59v6.15l3.59 2.09c.2.12.32.29.38.51s.03.43-.09.62c-.16.28-.4.42-.72.42c-.17 0-.31-.04-.42-.12l-3.82-2.23c-.17-.05-.31-.15-.42-.29s-.16-.3-.16-.49z'%3E%3C/path%3E%3C/svg%3E");
            }

            @media (max-width: 992px) {
                #webinar-view-blocks:checked~.webinars-list {
                    grid-template-columns: repeat(3, 1fr);
                }
            }

            @media (max-width: 768px) {
                .webinars-title h1 {
                    padding: 0 2rem;
                    width: 70%;
                }

                .announcement__img {
                    width: 90px;
                    height: 90px;
                    margin: 0.5em 0 1em 2em;
                }
            }

            @media (max-width: 576px) {
                .webinars-page {
                    margin: 0 -1rem;
                }

                .webinars-list-controls {
                    display: none;
                }

                .announcement {
                    background-size: 90px 90px, contain;
                }

                .announcement__img {
                    width: 90px;
                    height: 90px;
                    margin: -0.5em 0 1em 1.5em;
                }

                #webinar-view-list:checked~.webinars-list {
                    display: grid !important;
                    grid-template-columns: repeat(2, 1fr);
                }

                #webinar-view-list:checked~.webinars-list .webinar {
                    display: flex;
                    position: relative;
                    flex-direction: column;
                    gap: 0.5rem;
                }

                .webinar-image {
                    height: inherit;
                }

                .webinar-image img {
                    position: static;
                    width: 100%;
                    height: auto;
                    object-fit: cover;
                }

                #webinar-view-list:checked~.webinars-list .webinar-duration {
                    position: absolute;
                    right: 0rem;
                    top: 0;
                    background-color: rgba(255, 255, 255, 0.7);
                    border-radius: 0 8px 0 8px;
                    z-index: 1;
                    color: #000;
                    grid-area: image;
                    padding: 0 0.3rem;
                    font-size: 11px;
                }

                #webinar-view-list:checked~.webinars-list .webinar-title,
                #webinar-view-list:checked~.webinars-list .webinar-duration {
                    font-size: 12px;
                }

                #webinar-view-list:checked~.webinars-list {
                    gap: 0.8rem;
                }

                #webinar-view-list:checked~.webinars-list .webinar-title {
                    align-self: flex-start;
                }
            }

            @media (max-width: 475px) {
                .announcement {
                    display: block;
                    padding: clamp(1rem, 0.5714285714285714rem + 2.142857142857143vw, 2.5rem);
                    padding: 1rem;
                    /* padding-top: 120px; */
                    background-size: 100px 100px, contain;
                }

                .announcement__images {
                    display: flex;
                    flex-wrap: wrap;
                    width: 100%;
                }

                .announcement__img {
                    width: 100px;
                    height: 100px;
                    margin: 0 1rem 1rem 0;
                }

                #webinar-view-list:checked~.webinars-list .webinar {
                    grid-template-rows: 170px auto auto;
                }

                #webinar-view-blocks:checked~.webinars-list,
                #webinar-view-list:checked~.webinars-list {
                    grid-template-columns: repeat(1, 1fr);
                }

                .webinar-image {
                    height: initial;
                }

                #webinar-view-list:checked~.webinars-list .webinar-duration {
                    top: 0;
                }

                #webinar-view-list:checked~.webinars-list .webinar-title {
                    align-self: flex-start;
                }
            }

            .mobile-tags {
                display: none;
            }

            .mobile-tags-item {
                list-style-type: none;
                margin: 0;
            }

            .mobile-tags-link {
                padding: 0.4rem 0.7rem 0.2rem;
                border-radius: 1rem;
                color: rgba(0, 0, 0, 0.7) !important;
                font-weight: 600;
                font-size: clamp(0.8rem, 0.6545rem + 0.7273vw, 1.2rem);
                white-space: nowrap;
                display: block;
            }

            .mobile-tags-item:first-child .mobile-tags-link {
                padding-left: 0;
                padding-right: 0;
            }

            .mobile-tags-link[data-link="all"] {
                background-color: transparent;
                transition: all 0.3s;
            }

            .mobile-tags-link[data-link="all"]:hover,
            .mobile-tags-link[data-link="all"].is-active {
                text-decoration: underline;
            }

            .mobile-tags-link[data-link="job"] {
                background-color: #61c13a3b;
            }

            .mobile-tags-link[data-link="job"]:hover,
            .mobile-tags-link[data-link="job"].is-active {
                background-color: #61c13a;
                color: #fff !important;
            }

            .mobile-tags-link[data-link="service"] {
                background-color: #355fe526;
            }

            .mobile-tags-link[data-link="service"]:hover,
            .mobile-tags-link[data-link="service"].is-active {
                background-color: #355fe5;
                color: #fff !important;
            }

            .mobile-tags-link[data-link="feedbackx"] {
                background-color: #37cae230;
            }

            .mobile-tags-link[data-link="feedbackx"]:hover,
            .mobile-tags-link[data-link="feedbackx"].is-active {
                background-color: #37cae2;;
            }

            @media (max-width: 1200px) {
                .mobile-tags {
                    display: flex;
                    gap: 0.5rem;
                    flex-flow: row wrap;
                    padding: 0.5rem 0;
                }
            }

            .hidden-block {
                padding: 0.01rem 0;
            }

            /*список с галочкой*/

            .announcement__list-checked{
                list-style-type: none;
                padding-left: 42px;
                position: relative;
            }
            .announcement__list-checked li:before{
                content: "\2714\fe0f";
                position: absolute;
                left: -35px;
                top: 0;
                padding: 0;
                width: 0 !important;
                height: 0 !important;
                text-align: center;
                border-radius: none;
            }
        </style>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

        <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

        <header class="webinars-header" style="background-color: #f8f8f8;">
            <div class="webinars-title" style="margin-bottom: 0; margin-top: 1rem; margin-left: 1rem;">
                <h1 style="color: #1d2127;">HR-вебинары</h1>
            </div>
            <img src="/img/happy-job/images/webinar/shap_webinar.jpg" alt="" style="opacity: 0; height: 120px;">
        </header>
        <section class="webinars-page">
            <aside class="webinars-aside">
                <ul class="webinars-menu">
                    <li>
                        <a href="#top" data-link="all">Расписание вебинаров</a>
                    </li>
                    <li>
                        <a href="#webinars-list" data-link="all">Архив вебинаров</a>
                    </li>
                </ul>
            </aside>
            <div class="webinars-content">
                <header class="webinars-content-header" id="top">

                    <style>
                        .breadcrumbs {
                            padding: 0 0 2rem;
                        }
                        .breadcrumbs-list {
                            position: relative;
                            display: flex;
                            gap: 1rem;
                            align-items: center;
                            margin: 0;
                            padding: 0 !important;
                            max-width: 100%;
                            overflow: hidden;
                            list-style-type: none;
                        }
                        .container.blog .breadcrumbs-list > li{
                            list-style-type: none;
                        }
                        .breadcrumbs-list:after{
                            content: '';
                            display: block;
                            position: absolute;
                            width: 3rem;
                            height: 3rem;
                            right: 0;
                            top: 0;
                            background: rgb(255,255,255);
                            background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.25253851540616246) 13%, rgba(255,255,255,0.6979166666666667) 29%, rgba(255,255,255,0.8463760504201681) 48%, rgba(255,255,255,0.8995973389355743) 65%, rgba(255,255,255,1) 83%);
                        }

                        .breadcrumbs-item{
                            list-style-type: none;
                            margin: 0;
                            white-space: nowrap;
                        }

                        .breadcrumbs-item span[itemprop="name"]{
                            overflow: visible;
                            height: auto;
                            display: inline;
                            font-size: 14px;
                            font-weight: 400;
                        }


                        .breadcrumbs-item > span[itemprop="name"]{
                            color: #393A3C;
                        }

                        .breadcrumbs-item + .breadcrumbs-item:before{
                            content: '';
                            font-size: xx-small;
                            vertical-align: middle;
                            position: relative;
                            display: inline-block;
                            width: 1rem;
                            min-width: 1rem;
                            height: 1rem;
                            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='currentColor' d='M7.15 21.1q-.375-.375-.375-.888q0-.512.375-.887L14.475 12l-7.35-7.35q-.35-.35-.35-.875t.375-.9q.375-.375.888-.375q.512 0 .887.375l8.4 8.425q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325L8.9 21.125q-.35.35-.862.35q-.513 0-.888-.375Z'/%3E%3C/svg%3E");
                            background-position: center center;
                            background-repeat: no-repeat;
                            background-size: contain;
                            transform: translate(-5px, -7px);
                            background-color: transparent;
                            opacity: 0.3;
                        }

                        .breadcrumbs-link{
                            color: #61c13a !important;
                            text-decoration: none !important;
                            border-bottom: none !important;
                        }
                        .breadcrumbs-link:hover{
                            color: var(--c-link);
                            text-decoration: none;
                        }
                        .breadcrumbs-link > span[itemprop="name"]{
                            color: #61c13a;
                            font-size: 14px;
                        }

                        .breadcrumbs-item span[itemprop="name"] br {
                            display: none;
                        }

                        @media (min-width: 841px){
                            .breadcrumbs-links-contacts,
                            .breadcrumbs-links-metodika {
                                cursor: pointer;
                            }

                            .breadcrumbs-links-contacts > span[itemprop="name"],
                            .breadcrumbs-links-metodika > span[itemprop="name"]{
                                color: #61c13a;
                            }
                        }

                        @media (max-width: 575px) {
                            .breadcrumbs {
                                padding: 1.5rem 0 1rem;
                            }
                            .breadcrumbs-list {
                                gap: 0.5rem;
                            }
                            .breadcrumbs-item {
                                display: inline-flex;
                                align-items: flex-start;
                            }
                            .breadcrumbs-item + .breadcrumbs-item:before{
                                transform: translate(-3px, -3px);
                            }
                            .breadcrumbs-item > span[itemprop="name"]{
                                transform: translate(2px, 1px);
                            }
                            .breadcrumbs-item:last-child{
                                display: none;
                            }
                        }
                    </style>

                    <nav class="breadcrumbs">
                        <ul class="breadcrumbs-list" itemscope itemtype="https://schema.org/BreadcrumbList">
                            <li class="breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">

                                <a href="/" class="breadcrumbs-link" title="Вернуться на главную страницу" itemprop="item">
        <span itemprop="name">
          Главная</span>
                                </a>

                                <meta itemprop="position" content="1">
                            </li>











                            <li class="breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">

                                <span itemprop="name">HR-вебинары</span>

                                <meta itemprop="position" content="3">
                            </li>
                        </ul>
                    </nav>
                    <h2 class="webinars-content-title">Расписание вебинаров</h2>
                    <div class="announcement-slider">
                        <div>
                            <article class="announcement">
                                <div class="announcement__images">
                                    <div class="announcement__img" style="background-image: url(/img/spiker_200.png)"></div>
                                </div>
                                <div class="announcement__content">
                                    <p class="announcement-date">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ic" width="32" height="32" preserveaspectratio="xMidYMid meet" viewbox="0 0 24 24">
                                            <path fill="currentColor" d="M5 6h14v2H5z" opacity=".3"></path>
                                            <path fill="currentColor" d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z">
                                            </path>
                                        </svg>
                                        <span>28 марта 11:00</span>
                                    </p>
                                    <h2>EVP - как создать лучшее предложение на рынке</h2>
                                    <br>
                                    <p>
                                        <strong>Спикер:</strong><strong>Алексей Клочков</strong>, ведущий эксперт в области управленческого консалтинга России и руководитель HR-Tech компании Happy Job
                                    </p>


                                    <div class="announcement-details">
                                        <br>
                                        <p>
                                            <strong>В программе:</strong>
                                        </p>
                                        <p style="padding-left: 5px">
                                            ▪️ Ключевые атрибуты современного EVP<br>
                                            ▪️ Как определить сильные стороны компании<br>
                                            ▪️ Ценностное предложение как часть HR-бренда компании<br>
                                            ▪️ 5 признаков успешного EVP<br>
                                            ▪️ Тренды 2024 года. Как сформировать конкурентное предложение<br>
                                            ▪️ Топ-3 сильных EVP российских компаний
                                        </p>
                                        <br>

                                    </div>


                                    <a class="announcement-button" href="https://my.mts-link.ru/j/hrlogia/2058906285/" target="_blank" onclick="ym(153616072, 'reachGoal', 'event_click_btn_webinar'); return true;">Участвовать</a>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="announcement">
                                <div class="announcement__images">
                                    <div class="announcement__img" style="background-image: url(/img/webinars/Anait-Govorina.png)"></div>
                                </div>
                                <div class="announcement__content">
                                    <p class="announcement-date">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ic" width="32" height="32" preserveaspectratio="xMidYMid meet" viewbox="0 0 24 24">
                                            <path fill="currentColor" d="M5 6h14v2H5z" opacity=".3"></path>
                                            <path fill="currentColor" d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z">
                                            </path>
                                        </svg>
                                        <span>2 апреля 11:00</span>
                                    </p>
                                    <h2>Говорим цифрами: Вовлеченность и ее реальное влияние на текучесть. Опыт Европлан.</h2>
                                    <br>
                                    <p>
                                        <strong>Спикер:</strong><strong>Анаит Говорина</strong>, Директор департамента по работе с персоналом "ЛК Европлан".
                                    </p>


                                    <div class="announcement-details">
                                        <br>
                                        <p>
                                            «ЛК Европлан» — лидер российского лизингового рынка с численностью сотрудников свыше <strong>2 500</strong> человек.<br>
                                            Уже 4ый год компания развивает вовлеченность и лояльность своих сотрудников вместе с <strong>Happy Job</strong>.
                                        </p>
                                        <p>
                                            О том <strong>сколько компании стоят нелояльные сотрудники</strong> и КАК работа с <strong>вовлеченностью сказывается на текучести</strong>, расскажет на вебинаре Анаит Говорина.
                                        </p>
                                        <p>
                                            <strong>В программе:</strong>
                                        </p>
                                        <p style="padding-left: 5px">
                                            • Комплексная диагностика обратной связи в компании<br>
                                            • Как вовлечь <strong>всех</strong> сотрудников в работу с результатами исследований<br>
                                            • <strong>Реальные изменения</strong> показателей текучести по итогам опросов<br>
                                            • Как и почему меняется корпоративная культура при работе с вовлеченностью
                                        </p>
                                        <br>

                                    </div>


                                    <a class="announcement-button" href="https://my.mts-link.ru/hrlogia/2055173123/" target="_blank" onclick="ym(153616072, 'reachGoal', 'event_click_btn_webinar'); return true;">Участвовать</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </header>

                <div class="webinars-list-wrapper">
                    <div class="webinars-list-controls">
                        <label for="webinar-view-list" class="is-active" title="Переключить вид">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--icomoon-free" width="20" height="20" preserveaspectratio="xMidYMid meet" viewbox="0 0 16 16">
                                <path fill="currentColor" d="M0 0h4v4H0zm6 1h10v2H6zM0 6h4v4H0zm6 1h10v2H6zm-6 5h4v4H0zm6 1h10v2H6z"></path>
                            </svg>
                        </label>

                        <label for="webinar-view-blocks" title="Переключить вид">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--material-symbols" width="32" height="32" preserveaspectratio="xMidYMid meet" viewbox="0 0 24 24">
                                <path fill="currentColor" d="M7.25 8.75v-4.5h4.25v4.5Zm5.25 0v-4.5h4.25v4.5Zm5.25 0v-4.5H22v4.5ZM2 8.75v-4.5h4.25v4.5Zm10.5 5.5v-4.5h4.25v4.5Zm5.25 0v-4.5H22v4.5ZM2 14.25v-4.5h4.25v4.5Zm10.5 5.5v-4.5h4.25v4.5Zm-5.25 0v-4.5h4.25v4.5Zm10.5 0v-4.5H22v4.5ZM2 19.75v-4.5h4.25v4.5Zm5.25-5.5v-4.5h4.25v4.5Z">
                                </path>
                            </svg>
                        </label>
                    </div>
                    <input type="radio" name="webinar-view" id="webinar-view-list" class="webinar-view" checked>
                    <input type="radio" name="webinar-view" id="webinar-view-blocks" class="webinar-view">
                    <!--!-->
                    <h2 class="webinars-title" id="webinars-list">Архив вебинаров</h2>

                    <ul class="mobile-tags">
                        <li class="mobile-tags-item">
                            <a data-link="all" class="mobile-tags-link">Все</a>
                        </li>
                        <li class="mobile-tags-item">
                            <a data-link="job" class="mobile-tags-link">Happy Job</a>
                        </li>
                        <li class="mobile-tags-item">
                            <a data-link="service" class="mobile-tags-link">Happy Service</a>
                        </li>
                        <li class="mobile-tags-item">
                            <a data-link="feedbackx" class="mobile-tags-link">FeedbackX</a>
                        </li>
                    </ul>

                    <ul class="webinars-list">

                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/925867762" title="Ростелеком: Цена вовлеченности: как отношение сотрудников к компании влияет на производительность труда.">
                                <figure class="webinar-image">
                                    <img src="/img/webinars/925867762.png" alt="Ростелеком: Цена вовлеченности: как отношение сотрудников к компании влияет на производительность труда.">
                                </figure>
                                <h3 class="webinar-title">
                                    Ростелеком: Цена вовлеченности: как отношение сотрудников к компании влияет на производительность труда.
                                </h3>
                                <time class="webinar-duration">
                                    40
                                    минут
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/925013715" title="СИБУР: Держи руку на пульсе! Непрерывное управление вовлеченностью.">
                                <figure class="webinar-image">
                                    <img src="/img/webinars/925013715.png" alt="СИБУР: Держи руку на пульсе! Непрерывное управление вовлеченностью.">
                                </figure>
                                <h3 class="webinar-title">
                                    СИБУР: Держи руку на пульсе! Непрерывное управление вовлеченностью.
                                </h3>
                                <time class="webinar-duration">
                                    102
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/914775685" title="PR на максимум: как провести блестящий PR перед опросом и вовлечь максимум сотрудников. Кейс Черкизово.">
                                <figure class="webinar-image">
                                    <img src="/img/webinars/914775685.png" alt="PR на максимум: как провести блестящий PR перед опросом и вовлечь максимум сотрудников. Кейс Черкизово.">
                                </figure>
                                <h3 class="webinar-title">
                                    PR на максимум: как провести блестящий PR перед опросом и вовлечь максимум сотрудников. Кейс Черкизово.
                                </h3>
                                <time class="webinar-duration">
                                    54
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/912927815" title="Бенчмарки по функциям. Революция в точности сравнения.">
                                <figure class="webinar-image">
                                    <img src="/img/webinars/912927815.png" alt="Бенчмарки по функциям. Революция в точности сравнения.">
                                </figure>
                                <h3 class="webinar-title">
                                    Бенчмарки по функциям. Революция в точности сравнения.
                                </h3>
                                <time class="webinar-duration">
                                    64
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/909963600" title="Сбермаркет: Как навыки руководителя влияют на вовлечённость">
                                <figure class="webinar-image">
                                    <img src="/img/webinars/909963600.png" alt="Сбермаркет: Как навыки руководителя влияют на вовлечённость">
                                </figure>
                                <h3 class="webinar-title">
                                    Сбермаркет: Как навыки руководителя влияют на вовлечённость
                                </h3>
                                <time class="webinar-duration">
                                    59
                                    минут
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/905589716" title="Как HR и руководителям привлекать и удерживать специалистов в 2024">
                                <figure class="webinar-image">
                                    <img src="/img/webinars/905589716.png" alt="Как HR и руководителям привлекать и удерживать специалистов в 2024">
                                </figure>
                                <h3 class="webinar-title">
                                    Как HR и руководителям привлекать и удерживать специалистов в 2024
                                </h3>
                                <time class="webinar-duration">
                                    113
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/892168084" title="Happy Index: считаем золотую HR-метрику">
                                <figure class="webinar-image">
                                    <img src="/img/webinars/892168084.png" alt="Happy Index: считаем золотую HR-метрику">
                                </figure>
                                <h3 class="webinar-title">
                                    Happy Index: считаем золотую HR-метрику
                                </h3>
                                <time class="webinar-duration">
                                    73
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/885199535" title="Индекс mNPS: Зачем замерять лояльность к руководителю">
                                <figure class="webinar-image">
                                    <img src="/img/webinars/885199535.svg" alt="Индекс mNPS: Зачем замерять лояльность к руководителю">
                                </figure>
                                <h3 class="webinar-title">
                                    Индекс mNPS: Зачем замерять лояльность к руководителю
                                </h3>
                                <time class="webinar-duration">
                                    64
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/877824724" title="eNPS на прокачку<br>5 взрывных методов для роста лояльности">
                                <figure class="webinar-image">
                                    <img src="/img/webinars/877824724.png" alt="eNPS на прокачку<br>5 взрывных методов для роста лояльности">
                                </figure>
                                <h3 class="webinar-title">
                                    eNPS на прокачку<br>5 взрывных методов для роста лояльности
                                </h3>
                                <time class="webinar-duration">
                                    130
                                    минут
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/875878319" title="СберМаркет: <br>Перезапуск Performance review на основе данных">
                                <figure class="webinar-image">
                                    <img src="/img/webinars/875878319.png" alt="СберМаркет: <br>Перезапуск Performance review на основе данных">
                                </figure>
                                <h3 class="webinar-title">
                                    СберМаркет: <br>Перезапуск Performance review на основе данных
                                </h3>
                                <time class="webinar-duration">
                                    79
                                    минут
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/875509710" title="Как стать лучшим работодателем 2024">
                                <figure class="webinar-image">
                                    <img src="/img/webinars/875509710.jpg" alt="Как стать лучшим работодателем 2024">
                                </figure>
                                <h3 class="webinar-title">
                                    Как стать лучшим работодателем 2024
                                </h3>
                                <time class="webinar-duration">
                                    102
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -feedbackx">
                            <a class="webinar" href="https://vimeo.com/872452761" title="Революция в оценке 360">
                                <figure class="webinar-image">
                                    <img src="https://happy-job.ru/img/872452761.png" alt="Революция в оценке 360">
                                </figure>
                                <h3 class="webinar-title">
                                    Революция в оценке 360
                                </h3>
                                <time class="webinar-duration">
                                    73
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/864400546" title="HR-бенчмаркинг 2024: тренды и механизмы работы с бенчмарками">
                                <figure class="webinar-image">
                                    <img src="https://happy-job.ru/img/864400546.jpg" alt="HR-бенчмаркинг 2024: тренды и механизмы работы с бенчмарками">
                                </figure>
                                <h3 class="webinar-title">
                                    HR-бенчмаркинг 2024: тренды и механизмы работы с бенчмарками
                                </h3>
                                <time class="webinar-duration">
                                    83
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/862038137" title="М.Видео-Эльдорадо: вовлеченность через трансформацию корпоративной культуры">
                                <figure class="webinar-image">
                                    <img src="https://happy-job.ru/img/862038137.jpg" alt="М.Видео-Эльдорадо: вовлеченность через трансформацию корпоративной культуры">
                                </figure>
                                <h3 class="webinar-title">
                                    М.Видео-Эльдорадо: вовлеченность через трансформацию корпоративной культуры
                                </h3>
                                <time class="webinar-duration">
                                    82
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/854958797" title="Кто ответственный за рост KPI по вовлеченности персонала и eNPS">
                                <figure class="webinar-image">
                                    <img src="/img/854958797.jpg" alt="Кто ответственный за рост KPI по вовлеченности персонала и eNPS">
                                </figure>
                                <h3 class="webinar-title">
                                    Кто ответственный за рост KPI по вовлеченности персонала и eNPS
                                </h3>
                                <time class="webinar-duration">
                                    86
                                    минут
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -feedbackx">
                            <a class="webinar" href="https://vimeo.com/847289898" title="Развитие компетенций и эффективности сотрудника.">
                                <figure class="webinar-image">
                                    <img src="/img/847289898.png" alt="Развитие компетенций и эффективности сотрудника.">
                                </figure>
                                <h3 class="webinar-title">
                                    Развитие компетенций и эффективности сотрудника.
                                </h3>
                                <time class="webinar-duration">
                                    66
                                    минут
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/838922222" title="Как сформировать “реальный” сильный HR-бренд. Вебинар Алексея Клочкова.">
                                <figure class="webinar-image">
                                    <img src="/img/cover.png" alt="Как сформировать “реальный” сильный HR-бренд. Вебинар Алексея Клочкова.">
                                </figure>
                                <h3 class="webinar-title">
                                    Как сформировать “реальный” сильный HR-бренд. Вебинар Алексея Клочкова.
                                </h3>
                                <time class="webinar-duration">
                                    113
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -service">
                            <a class="webinar" href="https://vimeo.com/819757459" title="Культура внутреннего сервиса в «Ростелекоме»">
                                <figure class="webinar-image">
                                    <img src="/img/rostelekom.png" alt="Культура внутреннего сервиса в «Ростелекоме»">
                                </figure>
                                <h3 class="webinar-title">
                                    Культура внутреннего сервиса в «Ростелекоме»
                                </h3>
                                <time class="webinar-duration">
                                    100
                                    минут
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/805031472" title="Баттл методик исследования вовлеченности и лояльности">
                                <figure class="webinar-image">
                                    <img src="/img/photo_2023-03-13_14-13-11.jpg" alt="Баттл методик исследования вовлеченности и лояльности">
                                </figure>
                                <h3 class="webinar-title">
                                    Баттл методик исследования вовлеченности и лояльности
                                </h3>
                                <time class="webinar-duration">
                                    141
                                    минута
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/797367699" title="Практика развития eNPS: опыт сети магазинов «Магнит»">
                                <figure class="webinar-image">
                                    <img src="/img/praktika-razvitiya-enps.jpg" alt="Практика развития eNPS: опыт сети магазинов «Магнит»">
                                </figure>
                                <h3 class="webinar-title">
                                    Практика развития eNPS: опыт сети магазинов «Магнит»
                                </h3>
                                <time class="webinar-duration">
                                    102
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/792985451" title="Тренды вовлеченности 2021-22. Прогнозы 2023.">
                                <figure class="webinar-image">
                                    <img src="/img/webinar.jpg" alt="Тренды вовлеченности 2021-22. Прогнозы 2023.">
                                </figure>
                                <h3 class="webinar-title">
                                    Тренды вовлеченности 2021-22. Прогнозы 2023.
                                </h3>
                                <time class="webinar-duration">
                                    122
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/775030996" title="Вовлечённость в вовлечённость. Опыт Inventive Retail Group">
                                <figure class="webinar-image">
                                    <img src="/img/irg.jpg" alt="Вовлечённость в вовлечённость. Опыт Inventive Retail Group">
                                </figure>
                                <h3 class="webinar-title">
                                    Вовлечённость в вовлечённость. Опыт Inventive Retail Group
                                </h3>
                                <time class="webinar-duration">
                                    104
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/741869709" title="Кадровая политика Торговой Сети ТЕХНОНИКОЛЬ: как достичь лучших HR-метрик развивая вовлеченность">
                                <figure class="webinar-image">
                                    <img src="/img/741869709.jpg" alt="Кадровая политика Торговой Сети ТЕХНОНИКОЛЬ: как достичь лучших HR-метрик развивая вовлеченность">
                                </figure>
                                <h3 class="webinar-title">
                                    Кадровая политика Торговой Сети ТЕХНОНИКОЛЬ: как достичь лучших HR-метрик развивая вовлеченность
                                </h3>
                                <time class="webinar-duration">
                                    94
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/736779306" title="Как стать лучшим работодателем 2022">
                                <figure class="webinar-image">
                                    <img src="/img/736779306.jpg" alt="Как стать лучшим работодателем 2022">
                                </figure>
                                <h3 class="webinar-title">
                                    Как стать лучшим работодателем 2022
                                </h3>
                                <time class="webinar-duration">
                                    86
                                    минут
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -feedbackx">
                            <a class="webinar" href="https://vimeo.com/725201656" title="Оценка 360: методика и автоматизация от А до Я">
                                <figure class="webinar-image">
                                    <img src="/img/540030051.jpg" alt="Оценка 360: методика и автоматизация от А до Я">
                                </figure>
                                <h3 class="webinar-title">
                                    Оценка 360: методика и автоматизация от А до Я
                                </h3>
                                <time class="webinar-duration">
                                    69
                                    минут
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -service">
                            <a class="webinar" href="https://vimeo.com/716707159" title="10 вопросов для оценки качества внутреннего взаимодействия персонала (КВС, КВВ, ГВК, CSI)">
                                <figure class="webinar-image">
                                    <img src="/img/716707159.jpg" alt="10 вопросов для оценки качества внутреннего взаимодействия персонала (КВС, КВВ, ГВК, CSI)">
                                </figure>
                                <h3 class="webinar-title">
                                    10 вопросов для оценки качества внутреннего взаимодействия персонала (КВС, КВВ, ГВК, CSI)
                                </h3>
                                <time class="webinar-duration">
                                    87
                                    минут
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/712022696" title="12 главных вопросов про вовлеченность персонала в 2022">
                                <figure class="webinar-image">
                                    <img src="/img/712022696.jpg" alt="12 главных вопросов про вовлеченность персонала в 2022">
                                </figure>
                                <h3 class="webinar-title">
                                    12 главных вопросов про вовлеченность персонала в 2022
                                </h3>
                                <time class="webinar-duration">
                                    129
                                    минут
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/679045332" title="Календарь корпоративных исследований персонала 2022">
                                <figure class="webinar-image">
                                    <img src="/img/679045332.jpg" alt="Календарь корпоративных исследований персонала 2022">
                                </figure>
                                <h3 class="webinar-title">
                                    Календарь корпоративных исследований персонала 2022
                                </h3>
                                <time class="webinar-duration">
                                    52
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/671917556/" title="Презентация книги Алексея Клочкова">
                                <figure class="webinar-image">
                                    <img src="/img/671917556.jpg" alt="Презентация книги Алексея Клочкова">
                                </figure>
                                <h3 class="webinar-title">
                                    Презентация книги Алексея Клочкова
                                </h3>
                                <time class="webinar-duration">
                                    66
                                    минут
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -feedbackx">
                            <a class="webinar" href="https://vimeo.com/601033212" title="Методика оценки «360 градусов». Мировой тренд в оценке компетенций и развития персонала">
                                <figure class="webinar-image">
                                    <img src="/img/601033212.jpg" alt="Методика оценки «360 градусов». Мировой тренд в оценке компетенций и развития персонала">
                                </figure>
                                <h3 class="webinar-title">
                                    Методика оценки «360 градусов». Мировой тренд в оценке компетенций и развития персонала
                                </h3>
                                <time class="webinar-duration">
                                    51
                                    минута
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/580771577/" title="Как использовать принцип HR Zero для повышения вовлеченности и лояльности сотрудников">
                                <figure class="webinar-image">
                                    <img src="/img/580771577.jpg" alt="Как использовать принцип HR Zero для повышения вовлеченности и лояльности сотрудников">
                                </figure>
                                <h3 class="webinar-title">
                                    Как использовать принцип HR Zero для повышения вовлеченности и лояльности сотрудников
                                </h3>
                                <time class="webinar-duration">
                                    52
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/572558625/" title="Развивающая обратная связь в компании — тренды 2021">
                                <figure class="webinar-image">
                                    <img src="/img/572558625.jpg" alt="Развивающая обратная связь в компании — тренды 2021">
                                </figure>
                                <h3 class="webinar-title">
                                    Развивающая обратная связь в компании — тренды 2021
                                </h3>
                                <time class="webinar-duration">
                                    55
                                    минут
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/564197194/" title="Как повысить eNPS силами компании и руководителя?">
                                <figure class="webinar-image">
                                    <img src="/img/564197194.jpg" alt="Как повысить eNPS силами компании и руководителя?">
                                </figure>
                                <h3 class="webinar-title">
                                    Как повысить eNPS силами компании и руководителя?
                                </h3>
                                <time class="webinar-duration">
                                    48
                                    минут
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/556076816/" title="Как повысить eNPS и лояльность в 2021">
                                <figure class="webinar-image">
                                    <img src="/img/556076816.jpg" alt="Как повысить eNPS и лояльность в 2021">
                                </figure>
                                <h3 class="webinar-title">
                                    Как повысить eNPS и лояльность в 2021
                                </h3>
                                <time class="webinar-duration">
                                    62
                                    минуты
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -feedbackx">
                            <a class="webinar" href="https://vimeo.com/540030051/" title="FeedbackX - мультиролевая обратная связь и оценка ">
                                <figure class="webinar-image">
                                    <img src="/img/540030051.jpg" alt="FeedbackX - мультиролевая обратная связь и оценка ">
                                </figure>
                                <h3 class="webinar-title">
                                    FeedbackX - мультиролевая обратная связь и оценка
                                </h3>
                                <time class="webinar-duration">
                                    60
                                    минут
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -service">
                            <a class="webinar" href="https://vimeo.com/547969076" title="Happy Service. Как повысить качество внутреннего сервиса?">
                                <figure class="webinar-image">
                                    <img src="/img/547969076.jpg" alt="Happy Service. Как повысить качество внутреннего сервиса?">
                                </figure>
                                <h3 class="webinar-title">
                                    Happy Service. Как повысить качество внутреннего сервиса?
                                </h3>
                                <time class="webinar-duration">
                                    25
                                    минут
                                </time>
                            </a>
                        </li>
                        <li class="webinars-item -job">
                            <a class="webinar" href="https://vimeo.com/547971978" title="Дэшборд по вовлеченности 2021. Конструктор презентаций">
                                <figure class="webinar-image">
                                    <img src="/img/547971978.jpg" alt="Дэшборд по вовлеченности 2021. Конструктор презентаций">
                                </figure>
                                <h3 class="webinar-title">
                                    Дэшборд по вовлеченности 2021. Конструктор презентаций
                                </h3>
                                <time class="webinar-duration">
                                    47
                                    минут
                                </time>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="main-modal" id="webinar-modal" style="display:none; ">
            <div class="main-modal-flow">
                <header class="main-modal-header">
                    <h2 class="main-modal-title" id="webinar-sign-title"></h2>
                </header>
                <form class="main-modal-form" id="webinar-modal-form">
                    <div class="main-modal-item">
                        <div class="main-modal-input">
                            <label for="webinar-name" class="main-modal-label">Как к вам обращаться:<sup>*</sup></label>
                            <input id="webinar-name" name="name" type="text" placeholder="Ваше имя" required>
                        </div>
                    </div>
                    <div class="main-modal-item">
                        <div class="main-modal-input">
                            <input id="webinar-secondName" name="secondName" type="text" placeholder="Ваша фамилия" required>
                        </div>
                    </div>
                    <div class="main-modal-item">
                        <div class="main-modal-input">
                            <label for="webinar-organization" class="main-modal-label">Компания:<sup>*</sup></label>
                            <input id="webinar-organization" name="organization" type="text" placeholder="Ваша компания" required>
                        </div>
                    </div>
                    <div class="main-modal-item">
                        <div class="main-modal-input">
                            <label for="respondents" class="main-modal-label">Количество сотрудников:<sup>*</sup></label>
                            <select name="respondents" id="respondents">
                                <option value="0-100">0-100</option>
                                <option value="100-500">100-500</option>
                                <option value="500-1500">500-1500</option>
                                <option value="1500-5000">1500-5000</option>
                                <option value="5000+">5000+</option>
                            </select>
                        </div>
                    </div>
                    <div class="main-modal-item">
                        <div class="main-modal-input">
                            <label for="webinar-position" class="main-modal-label">Должность:<sup>*</sup></label>
                            <input id="webinar-position" name="position" type="text" placeholder="Ваша должность" required>
                        </div>
                    </div>
                    <div class="main-modal-item">
                        <div class="main-modal-input">
                            <label for="webinar-email" class="main-modal-label">E-mail:<sup>*</sup></label>
                            <input id="webinar-email" name="email" type="email" placeholder="Ваш e-mail" required>
                        </div>
                    </div>
                    <div class="main-modal-item">
                        <div class="main-modal-input">
                            <label for="webinar-phone" class="main-modal-label">Телефон:<sup>*</sup></label>
                            <input id="webinar-phone" name="phone" type="phone" placeholder="Ваш телефон" required pattern="\+7\(\d\d\d\)\d\d\d-\d\d-\d\d">
                        </div>
                    </div>
                    <input id="webinar-eventid" name="eventid" type="hidden">
                    <div class="main-modal-item">
                        <div class="main-modal-input -submit-button">
                            <button class="button button-default" id="main-form-submit">Записаться на вебинар</button>
                        </div>
                    </div>
                </form>
                <div class="main-modal-divider"></div>
                <footer class="main-modal-footer">
                    <p>Нажимая на кнопку «Записаться на вебинар», Вы даете согласие на обработку своих персональных данных.</p>
                    <p><a href="/privacy-policy/"><b class="privacy-policy-icon"></b> Политика конфиденциальности</a></p>
                </footer>
            </div>
        </div>

        <script>
            $(function(){

                const webinarPhone = document.getElementById('webinar-phone');
                var webinarMask = IMask(webinarPhone, maskOptions);

                $(".announcement-button").on( "click", function( event ) {
                    ym(153616072, 'reachGoal', 'event_click_btn_webinar');
                    $("#webinar-sign-title").html($(this).data('title'));
                    $("#webinar-eventid").val($(this).data('eventid'));
                });

                const webinarForm = document.getElementById('webinar-modal-form');
                const webinarFormButton = document.getElementById('main-form-submit');

                const phoneRegex = /^\+7\(\d{3}\)\d{3}-\d{2}-\d{2}$/;
                const emailRegex = /^[\w-\.]+@(?!gmail\.com|mail\.ru|yandex\.ru|rambler\.ru|yahoo\.com)([\w-]+\.)+[\w-]{2,4}$/;

                webinarFormButton.disabled = true

                const formDataValid = (data) => {
                    if (data.name.trim() === '') {
                        console.log('Имя не заполнено')
                        return false;
                    }
                    if (data.company.trim() === '') {
                        console.log('Название компании не указано')
                        return false;
                    }
                    if (data.respondents.trim() === '') {
                        console.log('Количество сотрудников не выбрано')
                        return false;
                    }

                    if (!(phoneRegex.test(data.phone.trim()))) {
                        console.log("Неправильно указан номер телефона");
                        return false;
                    }

                    if (!(emailRegex.test(data.email.trim()))) {
                        console.log('Некорректный email')
                        return false;
                    }
                    return true;
                }

                const getValidData = (form) => {
                    const formData = new FormData(form);
                    const currentFormData = {};
                    for (let [key, value] of formData.entries()) {
                        currentFormData[key] = value;
                    }
                    if (formDataValid(currentFormData)) {
                        webinarFormButton.disabled = false;
                        return currentFormData
                    } else {
                        webinarFormButton.disabled = true
                        return false
                    }
                }

                const sendForm = (webinarForm, formData) => {
                    fetch('/ajax', {
                        method: 'POST',
                        body: formData
                    }).then(function (response) {
                        if (!response.ok) {
                            throw new Error('Ошибка HTTP: ' + response.status);
                        }
                        console.log(response.status)
                        let message = response.msg;
                        Swal.fire({
                            icon: 'error',
                            title: 'Упс!',
                            text: message,
                        });
                        ym(46152993, 'reachGoal', 'event_error');
                        return response.json();
                    }).then(function (data) {
                        console.log('Успешно')
                        console.log(data)
                        console.log('--------------------')
                        Swal.fire(
                            'Благодарим за оставленную заявку!',
                            'Менеджер скоро свяжется с вами',
                            'success'
                        )
                        $("#main-modal-form").find('input[type="text"], input[type="phone"], input[type="email"], textarea').val('');
                        $("#main-modal-form").find('select').val($('#respondents').find(":first").text());
                        $(document).find('.carousel__button.is-close').trigger('click');
                        ym(46152993, 'reachGoal', 'mainpage_send_topform');
                    }).catch(function (error) {
                        console.error('Ошибка отправки данных на сервер:', error);
                        Swal.fire({
                            icon: 'question',
                            title: 'А вот это уже интересно',
                            text: error,
                        })
                        ym(46152993, 'reachGoal', 'event_error');
                    });
                }


                webinarForm.addEventListener('change', () => {
                    getValidData(webinarForm)
                });

                webinarForm.addEventListener('keyup', () => {
                    getValidData(webinarForm)
                });

                webinarFormButton.addEventListener('click', function (event) {
                    event.preventDefault();
                    const formData = new FormData(webinarForm);
                    for (let [key, value] of formData.entries()) {
                        console.log(key + '__' + value)
                    }
                    this.disabled = true;
                    console.log('Кнопка снова деактивирована')
                    console.log(formData.entries())
                    console.log('Началась отправка')
                    sendForm(webinarForm, formData);
                    setTimeout(function () {
                        location.reload(); // перезагружаем страницу
                    }, 4000);

                    console.log('Перезагрузка страницы')
                });





                $("#webinar-modal-form").on( "submit", function( event ) {
                    event.preventDefault();
                    console.log('Блок');
                    $("#webinar-modal-form button").prop("disabled", true);

                    $("#webinar-modal-form button").addClass('disabled');

                    let formData = {};
                    $(this).serializeArray().map(function(x){
                        formData[x.name] = x.value;
                    })
                    $.ajax({
                        url: "/ajax/webinarReg/",
                        method: "POST",
                        dataType: "json",
                        data: formData,
                    }).done(function (resp) {
                        console.log('Разблок');
                        $("#webinar-modal-form button").prop("disabled", false);
                        console.log(resp);
                        $(document).find('.carousel__button.is-close').trigger('click');
                        $("#webinar-modal-form input").val('');
                        $("#webinar-modal-form select").val($('#respondents').find(":first").text());
                        $("#webinar-modal-form button").removeClass('disabled');
                        if(resp.participationId){
                            Swal.fire({
                                icon: 'success',
                                title: '<span style="font-size: 22px;">Вы успешно <br>зарегистрировались <br>на вебинар!',
                                html: 'На нашем сайте вы найдёте инструменты и материалы для развития вовлеченности и лояльности сотрудников.',
                                confirmButtonColor: '#61c13b',
                                confirmButtonText: 'Перейти к изучению'
                            });
                        }else{
                            if(resp.error.code == '409'){
                                Swal.fire({
                                    icon: 'warning',
                                    title: '<span style="font-size: 22px;">Вы уже были зарегистрированы!',
                                    html: 'На нашем сайте вы найдёте инструменты и материалы для развития вовлеченности и лояльности сотрудников.',
                                    confirmButtonColor: '#61c13b',
                                    confirmButtonText: 'Перейти к изучению'
                                });
                            }else{
                                Swal.fire({
                                    icon: 'error',
                                    title: '<span style="font-size: 22px;">Ошибка!',
                                    html: 'Что-то пошло не так. <br>Пожалуйста, перезагрузите страницу и попробуйте еще раз.',
                                });
                            }
                        }
                    });
                    return false;
                });

            })
        </script>
        <style media="screen">
            .form-subscribe-news {
                display: flex;
                flex-wrap: wrap;
                margin: 20px 0 0;
            }

            .form-subscribe-news input {
                width: 220px;
                height: 42px;
                margin-right: 20px;
            }

            .form-subscribe-news button {
                font-size: 16px;
                height: 38px;
                padding-top: 16px;
                padding-bottom: 0;
                outline: none;
            }

            .form-subscribe-news__answer {
                margin: 20px 0 0;
                width: 100%;
            }

            @media (max-width: 800px) {
                .form-subscribe-news {
                    flex-direction: column;
                    align-items: flex-start;
                    margin-bottom: 10px;
                }

                .form-subscribe-news input {
                    margin: 0 0 15px 0;
                }
            }

            @media (max-width: 410px) {
                .form-subscribe-news {
                    align-items: center;
                }
            }

            .announcement-slider__arrow {
                position: absolute;
                top: 50%;
                width: 32px;
                height: 32px;
                z-index: 10;
                display: none !important;
            }

            .announcement-slider__arrow svg {
                width: 100%;
                height: 100%;
                fill: #61c13b;
                cursor: pointer;
                transition: transform 0.3s;
            }

            .announcement-slider__prev {
                left: 0;
                transform: scale(-1, 1) translateY(-50%);
            }

            .announcement-slider__next {
                right: 0;
                transform: translateY(-50%);
            }

            .announcement-slider__arrow:hover svg {
                transform: translateX(8px);
            }

            .announcement-slider .slick-dots {
                margin-top: 15px;
            }

            .announcement-slider .slick-active button {
                background-color: #61c13b;
            }

            .announcement-slider .slick-dots button:hover {
                box-shadow: 0 0 0 3px #61c13b;
                background-color: #61c13b;
            }

            #webinar-modal-form button.disabled {
                pointer-events: none;
            }

            @media(max-width: 576px) {
                .iphone .announcement-slider .slick-dots button {
                    transform: scaleX(0.5);
                }
            }
        </style>
        <script type="text/javascript">
            $(function () {

                var iPhone = navigator.userAgent.match(/iPhone/i) != null;
                if (iPhone) {
                    $('body').addClass('iphone');
                }

                $('.webinars-menu a').click(function () {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        let target = $(this.hash);
                        let href = $(this).attr('href');
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (href === "#top") {
                            let y = target.offset().top - 150;
                            $('html,body').animate({
                                scrollTop: y
                            }, 500);
                            return false;
                        } else {
                            $('html,body').animate({
                                scrollTop: (target.offset().top - 130)
                            }, 500);
                            return false;
                        }
                    }
                });

                var lightboxVideo = GLightbox({
                    selector: ".webinar",
                });
                $(".webinars-list-controls label").on("click", function () {
                    $(".webinars-list-controls label").removeClass("is-active");
                    $(this).addClass("is-active");
                });
                $(".webinars-menu a[data-link], .mobile-tags a[data-link]").on(
                    "click",
                    function () {
                        $(".webinars-menu a, .mobile-tags a").removeClass("is-active");
                        $(this).addClass("is-active");
                        let href = $(this).attr("data-link");
                        if (href !== "all") {
                            $(".webinars-item").removeClass("selected");
                            $(".webinars-item").removeClass("is-active");
                            $(".webinars-item").addClass("selected");
                            $(".-" + href).addClass("is-active");
                        } else {
                            $(".webinars-item").removeClass("selected");
                            $(".webinars-item").removeClass("is-active");
                        }
                    }
                );

                $(document).scroll(function () {
                    var documentTop = $(window).scrollTop();
                    var asideTop = $(".webinars-page").offset().top - 120;
                    var videosTop =
                        $(".videos").offset().top - $(".webinars-menu").height() - 200;
                    // console.log(asideTop + "__" + documentTop + "_" + videosTop);

                    if (0 <= documentTop && documentTop < asideTop) {
                        // console.log("нет фиксации");
                        $(".webinars-aside").removeClass("fixed").removeClass("menu-bottom");
                    }

                    if (asideTop < documentTop && documentTop < videosTop) {
                        // console.log("фиксация");
                        $(".webinars-aside").removeClass("menu-bottom");
                        $(".webinars-aside").addClass("fixed");
                    }

                    if (videosTop < documentTop) {
                        // console.log("меню остаётся снизу");
                        $(".webinars-aside").removeClass("fixed");
                        $(".webinars-aside").addClass("menu-bottom");
                    }
                });

                $('.form-subscribe-news').submit(function (e) {
                    e.preventDefault();
                    var formData = $(this).serialize();
                    var form = $(this);
                    $.ajax({
                        url: '/ajax',
                        method: 'POST',
                        dataType: 'json',
                        data: formData,
                    }).done(function (resp) {
                        // console.log(resp);
                        if (resp.status == 'success') {
                            form.find('.form-subscribe-news__captcha,input,button').hide();
                            form.find('.form-subscribe-news__answer').html('Спасибо! Вы подписаны на новости.');
                        }
                        else {
                            form.find('.form-subscribe-news__captcha').hide();
                            form.find('.form-subscribe-news__answer').html(resp.msg);
                        }
                    });
                    updateCaptcha();
                    return false;
                });


            });
        </script>

    </main>

</div>

<!-- endrender webinar//-->

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

<?php echo $this->render("/layouts/_parts/_webinars"); ?>


</div>

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
                        <input type="date" id="current-date" name="current-date" value="2024-03-25" min="2024-03-25">
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

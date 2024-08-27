<style>

    .article-layout {
        display: grid;
        margin-inline: auto;
        padding: 0 0 3rem 0;
        max-width: 1260px;
        grid-template-columns: 1fr 424px;
        grid-template-rows: auto auto auto auto auto auto;
        grid-column-gap: 36px;
        grid-row-gap: 30px;
        grid-template-areas: "breadcrumbs breadcrumbs" "header navigation" "picture navigation" "content navigation" "share navigation" "creator navigation" "slider slider" "footer footer";
    }

    .article-breadcrumbs {
        grid-area: breadcrumbs;
        padding: 0 1rem;
    }

    .breadcrumbs {
        display: flex;
        margin: 0;
    }

    .breadcrumbs-item {

    }

    .breadcrumbs-item a {
        font-size: 14px;
        letter-spacing: -0.09px;
        text-decoration: none;
    }

    .article-header {
        grid-area: header;
        padding: 0 1rem;
        display: flex;
        flex-direction: column;
        gap: 11px;
    }

    .article-title {
        font-size: 32px;
        font-weight: 500;
        line-height: 1.2;
    }

    .article-info {
        display: grid;
        align-items: center;
        grid-template-columns: 200px 1fr 198px;
        grid-gap: 11px;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: -10px;
    }

    .article-info-item:has(.article-tags) {
        align-self: baseline;
    }

    .article-date time {
        display: flex;
        gap: 7px;
        align-items: center;
    }

    .article-author {
        display: flex;
        gap: 12px;
        align-items: center;
    }

    .article-author figcaption {
        line-height: 20px;
        transform: translateY(3px);
    }

    .article-author img {
        border-radius: 18px;
        object-fit: cover;
        object-position: center center;
    }

    .article-tags {
        display: flex;
        gap: 4px;
        transform: translateY(4px);
    }

    .article-tags-link {
        color: #7F7F7F;
        text-decoration: none;
    }


    .article-navigation {
        grid-area: navigation;
        padding: 0 1rem;
    }

    .article-navigation-title {
        font-size: 18px;
        font-weight: 500;
        margin-bottom: 18px;

    }

    .article-navigation-list {
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .article-navigation-item {
        line-height: 1.2;
    }

    .article-navigation-block + .article-navigation-block {
        margin-top: 42px;
    }

    .article-navigation-link {
        font-size: 14px;
        color: #777777;
        text-decoration: none;
    }

    .article-navigation-link:hover {
        color: #61C13B;
    }

    .article-navigation-promo {
        display: grid;
        padding: 13px 0px 0 15px;
        grid-template-columns: 250px auto;
        grid-template-rows: auto 45px;
        grid-row-gap: 15px;
        grid-template-areas:
        'title image'
        'button image';
        border-left: 1px solid #CCCCCC;
        line-height: 1.2;
    }

    .article-navigation-promo .-promo-title {
        grid-area: title;
    }

    .article-navigation-promo .-promo-title strong {
        font-size: 20px;
        font-weight: 800;
    }

    .article-navigation-promo .-promo-button {
        grid-area: button;
    }

    .navigation-promo-button {
        color: #fff;
        text-decoration: none;
        display: inline-flex;
        gap: 10px;
        align-items: center;
        padding: 13px 20px;
        text-align: center;
        justify-content: center;
        border-radius: 6px;
        font-size: 16px;
        font-weight: 500;
        width: 100%;
        max-width: 245px;
    }

    .navigation-promo-button.-danger {
        background-color: #EE525B;
    }

    .navigation-promo-button.-success {
        background-color: #57BC20;
        max-width: 225px;
    }

    .article-navigation-promo .-promo-image {
        grid-area: image;
    }

    .article-navigation-promo .-promo-image img {
        margin-top: -1rem;
        transform: translate(14px, 4px) scale(1.25);
    }

    .-download-cases-icon {
        width: 32px;
        height: 32px;
        min-width: 20px;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: contain;
        margin: -1rem 0;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 256 256'%3E%3Cpath fill='%23fff' d='M222 144v64a6 6 0 0 1-6 6H40a6 6 0 0 1-6-6v-64a6 6 0 0 1 12 0v58h164v-58a6 6 0 0 1 12 0m-98.24 4.24a6 6 0 0 0 8.48 0l40-40a6 6 0 0 0-8.48-8.48L134 129.51V32a6 6 0 0 0-12 0v97.51L92.24 99.76a6 6 0 0 0-8.48 8.48Z'/%3E%3C/svg%3E");
    }

    .article-picture {
        grid-area: picture;
        padding: 0 1rem;
        margin-bottom: -1.5rem;
    }

    .article-picture img {
        aspect-ratio: 100 / 63;
        object-fit: cover;
        object-position: center;
        border-radius: 10px;
    }

    .article-content {
        grid-area: content;
        padding: 0 1rem;
    }

    .article h2 {
        font-size: 24px;
        font-weight: 500;
        margin: 43px 0 24px;
        line-height: 1.3;
    }

    .article p {
        line-height: 1.6;
        padding: 10px 0;
    }

    .article h2 + p {
        padding-top: 0;
    }

    .article-banner {
        display: grid;
        grid-template-columns: 255px 1fr;
        grid-template-rows: auto 1fr auto;
        grid-column-gap: 32px;
        grid-row-gap: 4px;
        grid-template-areas:
        'image header'
        'image body'
        'image footer';
        border-radius: 10px;
        padding: 26px 30px;
        margin: 30px 0;
    }

    .article-banner-image {
        grid-area: image;
        border-radius: 7px;
        object-fit: cover;
        object-position: center;
        height: 100%;
    }

    .article-banner-header {
        grid-area: header;
    }

    .article-banner-body {
        grid-area: body;
    }

    .article-banner-body h3 {
        font-weight: 500;
        line-height: 1.4;
    }

    .article-banner-footer {
        grid-area: footer;
    }

    .article-banner-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        border: 1px solid #000;
        border-radius: 6px;
        min-width: 180px;
        text-decoration: none;
        background-color: #fff;
        padding: 9px 16px;
    }

    .article-banner-button span:after {
        content: '';
        display: inline-block;
        margin: -12px -14px -12px -3px;
        width: 32px;
        height: 32px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: contain;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='currentColor' d='M13.292 12L9.046 7.754q-.14-.14-.15-.344t.15-.364t.354-.16t.354.16l4.388 4.389q.131.13.184.267q.053.136.053.298t-.053.298t-.184.267l-4.388 4.389q-.14.14-.344.15t-.364-.15t-.16-.354t.16-.354z'/%3E%3C/svg%3E");
    }

    .article-banner.-related {
        background-color: #F9F9F9;
    }

    .article-banner.-telegram {
        background: rgb(244, 245, 247);
        background: linear-gradient(145deg, rgba(244, 245, 247, 1) 0%, rgba(211, 225, 233, 1) 60%);
        grid-template-columns: 1fr 255px;
        grid-template-rows: auto 1fr auto;
        grid-column-gap: 32px;
        grid-row-gap: 4px;
        grid-template-areas:
        'header image'
        'body image'
        'footer image';
        overflow: hidden;
    }

    .article-banner.-telegram:last-child {
        margin-bottom: 0;
    }

    .article-banner.-telegram .article-banner-header {
        font-size: 24px;
        font-weight: 500;
        line-height: 1.1;
    }

    .article-banner.-telegram .article-banner-image {
        transform: translate(20px, 10px) scale(1.2);
        margin-bottom: -45px;
    }

    .article-banner.-telegram .article-banner-button {
        background-color: #57BC20;
        border-color: #57BC20;
        color: #fff;
    }

    .article-banner.-telegram .article-banner-button span:after {
        display: none;
    }

    .article-share {
        grid-area: share;
        padding: 0 1rem;
        display: flex;
        align-items: center;
        gap: 21px;
        margin-bottom: 18px;
    }

    .article-share .icon {
        width: 24px;
        height: 24px;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: contain;
    }

    .article-share .icon.-vk {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='%23fff' d='M21.504 18.381h-2.282c-.863 0-1.123-.699-2.67-2.247c-1.352-1.303-1.923-1.465-2.265-1.465c-.473 0-.602.13-.602.781v2.052c0 .555-.18.88-1.63.88a8.9 8.9 0 0 1-6.955-4.17a18.18 18.18 0 0 1-3.6-7.558c0-.342.13-.652.782-.652h2.28c.586 0 .797.261 1.027.864c1.107 3.258 2.996 6.092 3.763 6.092c.294 0 .422-.13.422-.863V8.739c-.097-1.531-.91-1.66-.91-2.214a.563.563 0 0 1 .585-.523h3.584c.49 0 .652.244.652.83v4.53c0 .489.21.651.358.651c.294 0 .52-.162 1.059-.7a18.76 18.76 0 0 0 2.802-4.66a.982.982 0 0 1 .993-.65h2.281c.684 0 .829.342.684.83a28.466 28.466 0 0 1-3.062 5.262c-.246.375-.344.57 0 1.01c.226.342 1.026 1.01 1.563 1.645c.782.78 1.431 1.682 1.922 2.67c.196.636-.131.961-.782.961'/%3E%3C/svg%3E");
    }

    .article-share .icon.-tg {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath d='M9.78 18.65l.28-4.23l7.68-6.92c.34-.31-.07-.46-.52-.19L7.74 13.3L3.64 12c-.88-.25-.89-.86.2-1.3l15.97-6.16c.73-.33 1.43.18 1.15 1.3l-2.72 12.81c-.19.91-.74 1.13-1.5.71L12.6 16.3l-1.99 1.93c-.23.23-.42.42-.83.42z' fill='%23fff'/%3E%3C/svg%3E");
    }

    .article-share .icon.-wp {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cg fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'%3E%3Cpath d='m3 21l1.65-3.8a9 9 0 1 1 3.4 2.9z'/%3E%3Cpath d='M9 10a.5.5 0 0 0 1 0V9a.5.5 0 0 0-1 0za5 5 0 0 0 5 5h1a.5.5 0 0 0 0-1h-1a.5.5 0 0 0 0 1'/%3E%3C/g%3E%3C/svg%3E");
    }

    .article-share span {
        font-size: 14px;
    }

    .article-share span:after {
        content: ':';
    }

    .article-share ul {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .article-share ul a {
        display: flex;
        width: 35px;
        height: 35px;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        background-color: #61C13A;
        border-radius: 50%;
        text-decoration: none;
    }

    .article-creator {
        grid-area: creator;
        padding: 0 1rem;
        display: grid;
        grid-template-columns: 90px auto auto 1fr;
        grid-template-rows: auto auto;
        grid-column-gap: 18px;
        font-size: 14px;
        grid-row-gap: 10px;
        padding-bottom: 45px;
    }

    .article-creator-image {
        grid-column: 1 / 2;
        grid-row: 1 / 3;
    }

    .article-creator-image img {
        border-radius: 50%;
        width: 80px;
        height: 80px;
        object-fit: cover;
        object-position: center;
    }

    .article-creator-description {
        grid-column: 2 / 5;
        grid-row: 1 / 2;
        max-width: 570px;
        line-height: 1.4;
        padding-top: 4px;
    }

    .article-creator-list {
        grid-column: 2 / 5;
        grid-row: 2 / 3;
        grid-template-columns: subgrid;
        display: grid;
        margin: 0;
    }

    .article-creator-list a {
        display: flex;
        align-items: center;
        color: #8B8B8B;
        text-decoration: none;
    }

    .article-creator-list a:hover {
        color: #61C13A;
    }

    .article-creator-list a:after {
        content: '';
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='%238B8B8B' d='M13.292 12L9.046 7.754q-.14-.14-.15-.344t.15-.364t.354-.16t.354.16l4.388 4.389q.131.13.184.267q.053.136.053.298t-.053.298t-.184.267l-4.388 4.389q-.14.14-.344.15t-.364-.15t-.16-.354t.16-.354z'/%3E%3C/svg%3E");
        width: 25px;
        height: 25px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .article-creator-list a:hover:after {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='%2361C13A' d='M13.292 12L9.046 7.754q-.14-.14-.15-.344t.15-.364t.354-.16t.354.16l4.388 4.389q.131.13.184.267q.053.136.053.298t-.053.298t-.184.267l-4.388 4.389q-.14.14-.344.15t-.364-.15t-.16-.354t.16-.354z'/%3E%3C/svg%3E");
    }

    .article-slider-wrapper {
        grid-area: slider;
        padding: 0 1rem;
        display: grid;
        grid-template-columns: 55px 1fr 55px;
        grid-template-rows: auto 170px auto auto;
        grid-template-areas: '. title .' 'prev slider next' '. slider .' '. button .';
        justify-content: center;
        align-items: center;
        align-content: center;
        margin: 0 -55px;
        grid-row-gap: 14px;
        grid-column-gap: 9px;
    }

    .article-slider-wrapper h2 {
        grid-area: title;
        font-size: 20px;
        font-weight: 500;
    }

    .article-slider-wrapper .article-slider-arrow.-prev {
        grid-area: prev;
    }

    .article-slider-wrapper .article-slider-arrow.-next {
        grid-area: next;
    }

    .article-slider-js {
        grid-area: slider;
        width: 100%;
        overflow: hidden;
    }

    .article-slider-arrow .arrow {
        display: block;
        width: 46px;
        height: 46px;
        padding: 0.5rem;
        background-repeat: no-repeat;
        background-size: 100%;
    }

    .article-slider-arrow.-prev .arrow {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='%23CCCCCC' d='m7.825 13l4.9 4.9q.3.3.288.7t-.313.7q-.3.275-.7.288t-.7-.288l-6.6-6.6q-.15-.15-.213-.325T4.426 12t.063-.375t.212-.325l6.6-6.6q.275-.275.688-.275t.712.275q.3.3.3.713t-.3.712L7.825 11H19q.425 0 .713.288T20 12t-.288.713T19 13z'/%3E%3C/svg%3E");
    }

    .article-slider-arrow.-prev .arrow:hover {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='%2361C13A' d='m7.825 13l4.9 4.9q.3.3.288.7t-.313.7q-.3.275-.7.288t-.7-.288l-6.6-6.6q-.15-.15-.213-.325T4.426 12t.063-.375t.212-.325l6.6-6.6q.275-.275.688-.275t.712.275q.3.3.3.713t-.3.712L7.825 11H19q.425 0 .713.288T20 12t-.288.713T19 13z'/%3E%3C/svg%3E");
    }

    .article-slider-arrow.-next .arrow {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='%23CCCCCC' d='M16.175 13H5q-.425 0-.712-.288T4 12t.288-.712T5 11h11.175l-4.9-4.9q-.3-.3-.288-.7t.313-.7q.3-.275.7-.288t.7.288l6.6 6.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-6.6 6.6q-.275.275-.687.275T11.3 19.3q-.3-.3-.3-.712t.3-.713z'/%3E%3C/svg%3E");
    }

    .article-slider-arrow.-next .arrow:hover {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='%2361C13A' d='M16.175 13H5q-.425 0-.712-.288T4 12t.288-.712T5 11h11.175l-4.9-4.9q-.3-.3-.288-.7t.313-.7q.3-.275.7-.288t.7.288l6.6 6.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-6.6 6.6q-.275.275-.687.275T11.3 19.3q-.3-.3-.3-.712t.3-.713z'/%3E%3C/svg%3E");
    }

    .slider-card {
        display: flex;
        gap: 10px;
        flex-direction: column;
    }

    .slider-card-image {
        aspect-ratio: 100 / 59;
        margin-bottom: 12px;
    }

    .slider-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        border-radius: 10px;
    }

    .slider-card-tags {
        display: flex;
        gap: 5px;
        flex-flow: row wrap;
        margin: 0;
    }

    .slider-card-tags li {

    }

    .slider-card-tags a {
        font-size: 14px;
        text-decoration: none;
        color: #7F7F7F;
    }

    .slider-card-title {
        font-weight: 500;
        line-height: 1.2;
    }

    .slider-card-link {

    }

    .slider-card-link:hover {
        color: #61C13A;
    }

    .article-slider-button {
        text-align: center;
        grid-area: button;
        padding: 5rem 0;
    }

    .materials-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        border: 1px solid #000;
        border-radius: 6px;
        min-width: 180px;
        text-decoration: none;
        background-color: #fff;
        padding: 12px 22px;
    }

    .materials-button span:after {
        content: '';
        display: inline-block;
        margin: -12px -14px -12px -3px;
        width: 32px;
        height: 32px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: contain;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='currentColor' d='M13.292 12L9.046 7.754q-.14-.14-.15-.344t.15-.364t.354-.16t.354.16l4.388 4.389q.131.13.184.267q.053.136.053.298t-.053.298t-.184.267l-4.388 4.389q-.14.14-.344.15t-.364-.15t-.16-.354t.16-.354z'/%3E%3C/svg%3E");
    }

    @media (max-width: 1200px) {
        .article-layout {
            grid-template-columns: 1fr 320px;
            grid-column-gap: 20px;
        }

        .article-navigation-promo {
            display: grid;
            padding: 12px;
            box-shadow: 0 0px 9px 0 rgb(0 0 0 / 10%);
            grid-template-columns: 60% 40%;
            grid-template-rows: auto 50px;
            grid-row-gap: 5px;
            grid-template-areas: initial;
            border-left: 0px solid transparent;
            line-height: 1.2;
            border-radius: 10px;
        }

        .article-navigation-promo .-promo-title {
            grid-column: 1 / 2;
            grid-row: 1 / 2;
        }

        .article-navigation-promo .-promo-button {
            grid-column: 1 / 3;
            grid-row: 2 / 3;
            position: relative;
            z-index: 1;
        }

        .article-navigation-promo .-promo-image {
            grid-column: 2 / 3;
            grid-row: 1 / 3;
        }

        .article-navigation-promo .-promo-image img {
            transform: none;
            margin-top: -0.5rem;
        }

        .article-navigation-promo .-promo-title strong {
            font-size: 17px;
        }

        .navigation-promo-button,
        .navigation-promo-button.-success {
            max-width: 100%;
        }

        .article-slider-wrapper {
            margin: 0px;
        }


        .article-slider-button {
            padding: 2rem 0;
        }
    }

    @media (max-width: 992px) {
        .article-info {
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto;
            margin-bottom: 10px;
        }

        .article-info-item:last-child {
            grid-column: 1 / 3;
        }

        .article-title {
            font-size: 22px;
        }

        .article h2 {
            font-size: 20px;
            margin: 30px 0 16px;
        }

        .article-banner {
            display: grid;
            grid-template-columns: 200px 1fr;
            grid-template-rows: auto 1fr auto;
            grid-column-gap: 1rem;
            grid-row-gap: 4px;
            border-radius: 10px;
            padding: 1.2rem;
            margin: 20px 0;
        }
    }

    @media (max-width: 880px) {
        .article-layout {
            padding: 0 0 2rem 0;
            max-width: 1260px;
            grid-template-columns: 1fr;
            grid-template-rows: auto auto auto auto auto auto;
            grid-column-gap: 0;
            grid-row-gap: 1rem;
            grid-template-areas:
        "breadcrumbs"
        "header"
        "picture"
        "content"
        "share"
        "creator"
        "slider"
        "footer";
        }

        .article-navigation {
            display: none;
        }
    }

    @media (max-width: 992px) {
        .article-banner {
            display: grid;
            grid-template-columns:1fr;
            grid-template-rows: auto auto auto auto;
            grid-template-areas:
              'image'
              'header'
              'body'
              'footer';
            grid-row-gap: 1rem;
            border-radius: 10px;
            padding: 1rem;
            margin: 1rem 0;
        }

        .article-banner-image {
            width: 100%;
        }

        .article-banner.-telegram {
            grid-template-columns: 1fr;
            grid-template-rows: auto auto auto auto;
            grid-column-gap: 16px;
            grid-row-gap: 4px;
            grid-template-areas:
        'header'
        'body'
        'image'
        'footer';
            overflow: hidden;
        }

        .article-banner.-telegram .article-banner-image {
            transform: none;
            margin-bottom: 0;
        }

        .article-creator {
            grid-template-columns: 90px auto 1fr;
            grid-template-rows: auto auto auto;
            grid-column-gap: 18px;
            padding-bottom: 30px;
        }

        .article-creator-list {
            grid-column: 2 / 4;
            grid-row: 2 / 4;
            grid-template-columns: subgrid;
            display: grid;
            margin: 0;
        }

        .breadcrumbs-item:last-child {
            display: none;
        }

        .site-header-wrapper.-phoneview + .site-header-height {
            height: 100px;
        }
    }

</style>

<div class="article-layout">
    <!--Крошки -->
    <div class="article-breadcrumbs">
        <ul class="breadcrumbs">
            <li class="breadcrumbs-item">
                <a href="/" class="breadcrumbs-link">Главная</a>
            </li>
            <li class="breadcrumbs-item">
                <a href="/" class="breadcrumbs-link">Блог</a>
            </li>
            <li class="breadcrumbs-item">
				<span class="breadcrumbs-text"
                >Как повысить вовлеченность сотрудников: практики, идеи,
					лайфхаки</span
                >
            </li>
        </ul>
    </div>
    <!--/-->

    <!--Шапка статьи -->
    <div class="article-header">
        <h1 class="article-title">
            Как повысить вовлеченность сотрудников: <br>практики, идеи, лайфхаки
        </h1>
        <ul class="article-info">
            <li class="article-info-item">
                <div class="article-date">
                    <p><span>23 января 2024</span></p>
                    <time><b>🕒</b>5 минут</time>
                </div>
            </li>
            <li class="article-info-item">
                <figure class="article-author">
					<span>
						<img src="https://placehold.co/35x35" alt=""/>
					</span>
                    <figcaption>
                        <p><strong>Алексей Клочков</strong></p>
                        <p>Контент-директор</p>
                    </figcaption>
                </figure>
            </li>
            <li class="article-info-item">
                <ul class="article-tags">
                    <li class="article-tags-item">
                        <a href="#" class="article-tags-link">#вовлеченность</a>
                    </li>
                    <li class="article-tags-item">
                        <a href="#" class="article-tags-link">#обучение</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <!--/-->

    <!--Навигация по статье -->
    <div class="article-navigation">
        <div class="article-navigation-block">
            <h3 class="article-navigation-title">Оглавление</h3>
            <ul class="article-navigation-list">
                <li class="article-navigation-item">
                    <a href="#" class="article-navigation-link"
                    >Предоставляйте сотрудникам <br>обратную связь</a
                    >
                </li>
                <li class="article-navigation-item">
                    <a href="#" class="article-navigation-link"
                    >Обеспечьте комфортное рабочее <br>пространство и достойную зарплату</a
                    >
                </li>
                <li class="article-navigation-item">
                    <a href="#" class="article-navigation-link"
                    >Развивайте компетенции руководителя</a
                    >
                </li>
                <li class="article-navigation-item">
                    <a href="#" class="article-navigation-link"
                    >Поделитесь с сотрудниками планами <br>на будущее</a
                    >
                </li>
                <li class="article-navigation-item">
                    <a href="#" class="article-navigation-link"
                    >Поощряйте и признавайте успехи</a
                    >
                </li>
                <li class="article-navigation-item">
                    <a href="#" class="article-navigation-link"
                    >Улучшайте рабочие процессы в компании</a
                    >
                </li>
                <li class="article-navigation-item">
                    <a href="#" class="article-navigation-link"
                    >Создавайте условия для реализации <br>сложных и нетипичных проектов</a
                    >
                </li>
                <li class="article-navigation-item">
                    <a href="#" class="article-navigation-link"
                    >Создавайте позитивную атмосферу <br>в команде</a
                    >
                </li>
                <li class="article-navigation-item">
                    <a href="#" class="article-navigation-link"
                    >Помогите сотрудникам найти <br>work-life balance</a
                    >
                </li>
                <li class="article-navigation-item">
                    <a href="#" class="article-navigation-link"
                    >Предлагайте возможности для развития</a
                    >
                </li>
            </ul>
        </div>
        <div class="article-navigation-block">
            <div class="article-navigation-promo">
                <div class="-promo-title"><strong>Запустите опрос вовлечённости</strong></div>
                <div class="-promo-button">
                    <a href="" class="navigation-promo-button -danger"
                    >Оставить заявку</a
                    >
                </div>
                <div class="-promo-image">
                    <img src="/static/images/article-promo-1.png" alt="">
                </div>
            </div>
        </div>
        <div class="article-navigation-block">
            <div class="article-navigation-promo">
                <div class="-promo-title">
                    <strong>15 работающих кейсов</strong> по развитию вовлеченности
                </div>
                <div class="-promo-button">
                    <a href="" class="navigation-promo-button -success"
                    ><b class="-download-cases-icon"></b><span>Скачать кейсы</span></a
                    >
                </div>
                <div class="-promo-image">
                    <img src="/static/images/article-promo-2.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--/-->

    <!--Главное изображение -->
    <figure class="article-picture">
        <img src="https://placehold.co/770x480" alt=""/>
    </figure>
    <!--/-->

    <!--Контент статьи -->
    <div class="article-content">
        <article class="article">
            <h2>1. Предоставляйте сотрудникам обратную связь</h2>

            <p>
                Вовлеченность — физическое, эмоциональное и интеллектуальное состояние,
                в котором сотрудники стремятся выполнять работу как можно лучше,
                достигать результатов. В этой статье мы рассмотрим 10 факторов, которые
                сильнее всего связаны с этим понятием и изучаются в методике Happy Job.
                А также расскажем, как узнать, что мешает вашим сотрудникам эффективно
                работать, и дадим конкретные советы по повышению вовлеченности.
            </p>

            <h2>2. Обеспечьте комфортное рабочее пространство <br>и достойную зарплату</h2>

            <p>
                Вовлеченность — физическое, эмоциональное и интеллектуальное состояние,
                в котором сотрудники стремятся выполнять работу как можно лучше,
                достигать результатов.
            </p>
            <p>
                В этой статье мы рассмотрим 10 факторов, которые сильнее всего связаны с
                этим понятием и изучаются в методике Happy Job. А также расскажем, как
                узнать, что мешает вашим сотрудникам эффективно работать, и дадим
                конкретные советы по повышению вовлеченности.
            </p>
            <p>
                Кроме того, важно помнить, что люди очень теряют в продуктивности, если
                расценивают уровень оплаты труда и количество предоставляемых компанией
                льгот и привилегий как неудовлетворительные. Например, по нашим
                наблюдениям, люди считают зарплату «ниже рынка» неприемлемой.
            </p>
            <p>
                Ниже — некоторые рекомендации, нацеленные на то, чтобы улучшить
                удовлетворенность команды условиями труда и размером оплаты:
            </p>

            <div class="article-banner -related">
                <img
                        src="https://placehold.co/260x150"
                        alt=""
                        class="article-banner-image"
                />

                <div class="article-banner-header">Читайте также</div>
                <div class="article-banner-body">
                    <h3>
                        Кадровая политика в организации: но так заголовок в 2 срочки или
                        даже 3)) вот такой пример
                    </h3>
                </div>
                <div class="article-banner-footer">
                    <a href="/" class="article-banner-button">
                        <span>Подробнее</span>
                    </a>
                </div>
            </div>

            <h2>2. Развивайте компетенции руководителя</h2>

            <p>
                Вовлеченность — физическое, эмоциональное и интеллектуальное состояние,
                в котором сотрудники стремятся выполнять работу как можно лучше,
                достигать результатов.
            </p>
            <p>
                В этой статье мы рассмотрим 10 факторов, которые сильнее всего связаны с
                этим понятием и изучаются в методике Happy Job. А также расскажем, как
                узнать, что мешает вашим сотрудникам эффективно работать, и дадим
                конкретные советы по повышению вовлеченности.
            </p>
            <p>
                Кроме того, важно помнить, что люди очень теряют в продуктивности, если
                расценивают уровень оплаты труда и количество предоставляемых компанией
                льгот и привилегий как неудовлетворительные. Например, по нашим
                наблюдениям, люди считают зарплату «ниже рынка» неприемлемой.
            </p>
            <p>
                Ниже — некоторые рекомендации, нацеленные на то, чтобы улучшить
                удовлетворенность команды условиями труда и размером оплаты.
            </p>

            <div class="article-banner -telegram">
                <img
                        src="/static/images/tg-banner-image.png"
                        alt=""
                        class="article-banner-image"
                />

                <div class="article-banner-header">
                    Всё о развитии персонала <br>в нашем Telegram
                </div>
                <div class="article-banner-body">
                    <p>
                        Первыми узнавайте о важных мероприятиях, трендах и кейсах в HR-сфере
                    </p>
                </div>
                <div class="article-banner-footer">
                    <a href="/" class="article-banner-button">
                        <span>Подписаться</span>
                    </a>
                </div>
            </div>
        </article>
    </div>
    <!--/-->

    <!--Расшарить статью -->
    <div class="article-share">
        <span>Поделиться</span>
        <ul>
            <li>
                <a href=""><b class="icon -vk"></b></a>
            </li>
            <li>
                <a href=""><b class="icon -tg"></b></a>
            </li>
            <li>
                <a href=""><b class="icon -wp"></b></a>
            </li>
        </ul>
    </div>
    <!--/-->

    <!--Автор статьи -->
    <div class="article-creator">
        <div class="article-creator-image">
            <img src="/static/images/alexey-klochkov.png" alt="">
        </div>
        <p class="article-creator-description"><strong>Алексей Клочков</strong> — ведущий эксперт в области
                                                                                управленческого консалтинга России и
                                                                                руководитель HR-Tech компании Happy Inc.
        </p>
        <ul class="article-creator-list">
            <li><a href="/">Об авторе</a></li>
            <li><a href="/">Задать вопрос</a></li>
            <li><a href="/">Все статьи автора</a></li>
        </ul>
    </div>
    <!--/-->

    <!--Слайдер -->
    <div class="article-slider-wrapper">
        <h2>Новое на сайте</h2>
        <div class="article-slider-arrow -prev">
            <a class="arrow"></a>
        </div>
        <div class="article-slider-js">
            <div class="article-slider swiper-wrapper">
                <div class="article-slider-item swiper-slide">
                    <div class="article-slider-card slider-card">
                        <a class="slider-card-image">
                            <img src="https://placehold.co/300x170" alt="">
                        </a>
                        <ul class="slider-card-tags">
                            <li><a href="">#вовлеченность</a></li>
                            <li><a href="">#обучение</a></li>
                        </ul>
                        <h3 class="slider-card-title">
                            <a class="slider-card-link">Адаптация удаленных сотрудников</a>
                        </h3>
                    </div>
                </div>
                <div class="article-slider-item swiper-slide">
                    <div class="article-slider-card slider-card">
                        <a class="slider-card-image">
                            <img src="https://placehold.co/300x170" alt="">
                        </a>
                        <ul class="slider-card-tags">
                            <li><a href="">#вовлеченность</a></li>
                            <li><a href="">#обучение</a></li>
                        </ul>
                        <h3 class="slider-card-title">
                            <a class="slider-card-link">Адаптация удаленных сотрудников</a>
                        </h3>
                    </div>
                </div>
                <div class="article-slider-item swiper-slide">
                    <div class="article-slider-card slider-card">
                        <a class="slider-card-image">
                            <img src="https://placehold.co/300x170" alt="">
                        </a>
                        <ul class="slider-card-tags">
                            <li><a href="">#вовлеченность</a></li>
                            <li><a href="">#обучение</a></li>
                        </ul>
                        <h3 class="slider-card-title">
                            <a class="slider-card-link">Адаптация удаленных сотрудников</a>
                        </h3>
                    </div>
                </div>
                <div class="article-slider-item swiper-slide">
                    <div class="article-slider-card slider-card">
                        <a class="slider-card-image">
                            <img src="https://placehold.co/300x170" alt="">
                        </a>
                        <ul class="slider-card-tags">
                            <li><a href="">#вовлеченность</a></li>
                            <li><a href="">#обучение</a></li>
                        </ul>
                        <h3 class="slider-card-title">
                            <a class="slider-card-link">Адаптация удаленных сотрудников</a>
                        </h3>
                    </div>
                </div>
                <div class="article-slider-item swiper-slide">
                    <div class="article-slider-card slider-card">
                        <a class="slider-card-image">
                            <img src="https://placehold.co/300x170" alt="">
                        </a>
                        <ul class="slider-card-tags">
                            <li><a href="">#вовлеченность</a></li>
                            <li><a href="">#обучение</a></li>
                        </ul>
                        <h3 class="slider-card-title">
                            <a class="slider-card-link">Адаптация удаленных сотрудников</a>
                        </h3>
                    </div>
                </div>
                <div class="article-slider-item swiper-slide">
                    <div class="article-slider-card slider-card">
                        <a class="slider-card-image">
                            <img src="https://placehold.co/300x170" alt="">
                        </a>
                        <ul class="slider-card-tags">
                            <li><a href="">#вовлеченность</a></li>
                            <li><a href="">#обучение</a></li>
                        </ul>
                        <h3 class="slider-card-title">
                            <a class="slider-card-link">Адаптация удаленных сотрудников</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="article-slider-arrow -next">
            <a href="" class="arrow"></a>
        </div>
        <div class="article-slider-button">
            <a class="materials-button">
                <span>Читать другие материалы</span>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const articleSlider = new Swiper('.article-slider-js', {
            slidesPerView: 4,
            spaceBetween: 15,
            loop: true,
            navigation: {
                nextEl: '.article-slider-arrow.-next .arrow',
                prevEl: '.article-slider-arrow.-prev .arrow',
            },
            breakpoints: {
                1200: {
                    slidesPerView: 4,
                },
                768: {
                    slidesPerView: 3,
                },
                576: {
                    slidesPerView: 2,
                },
                0: {
                    slidesPerView: 1,
                },
            }
        });

    </script>
    <!--/-->

</div>
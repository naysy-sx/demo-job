<?php $this->title = 'Калькулятор ROI'; ?>

<style>

    .business-calculator {
        padding: 0 0 3.6rem 0;
    }

    .saving-money {
        display: grid;
        grid-template-columns: auto 210px 420px;
        grid-template-rows: auto 1fr;
        grid-template-areas: 'labels labels chart' 'sliders nums chart';
        margin-inline: auto;
        grid-column-gap: 5rem;
        grid-row-gap: 3rem;
        padding-bottom: 76px;
        --apple-color: #3a5462;
        --apple-color-light: #e6eaf5;
    }

    .range-sliders-header{
        grid-area: labels;
    }
    .range-sliders-header strong{
        display: block;
        font-weight: normal;
        margin: 0 0 1rem 2rem;

    }
    .range-sliders-header form{
        display: flex;
        border-radius: 6px;
        overflow: hidden;
        border: 1px solid #3a5463;
    }
    .range-sliders-header label{
        position: relative;
        flex: 1;
        flex-basis: 50%;
        margin: 0;
        cursor: pointer;
    }
    .range-sliders-header input{
        display: none;
    }
    .range-sliders-header span{
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 0.5rem 1rem;
    }
    .range-sliders-header input:checked + span{
        color: #fff;
        background-color: #3a5463;
        font-weight: bold;
    }
    .range-sliders-header input:not(:checked) + span{
        color: #3a5463;
        background-color: #fff;
    }

    .-range-sliders {
        grid-area: sliders;
    }

    .-total-nums {
        grid-area: nums;
    }
    .-chart {
        grid-area: chart;
    }

    .saving-money ul {
        margin: 0;
        padding: 0;
    }

    .saving-money .diagram-inputs {
        margin-left: 2rem;
    }

    .saving-money-column {
        align-self: center;
    }


    .saving-money-column.-total-nums {
        position: relative;
        z-index: 1;
        transform: translateY(-46px);
    }

    .saving-money-divider {
        width: 2px;
        border-radius: 8px;
        background-color: #f8faff;
        margin: 0 1rem;
    }

    .diagram-inputs {
        list-style-type: none;
    }

    .diagram-form {
        display: flex;
        flex-direction: column;
        max-width: 207px;
    }
    .diagram-form ul {
        display: flex;
        flex-direction: column;
    }
    .diagram-form label {
        font-weight: 400;
        display: block;
        margin: 0;
        padding-bottom: 4.4rem;
    }
    .diagram-form div {
        position: relative;
        height: 0;
    }
    .diagram-form div::before {
        content: attr(data-value);
        position: absolute;
        background-color: #3a5463;
        color: #fff;
        padding: 3px 13px 0;
        border-radius: 6px;
        left: var(--leftPos);
        font-size: 14px;
        font-weight: 500;
        transform: translate(-50%, -37px);
        white-space: nowrap;
    }

    .diagram-form div::after {
        content: '';
        display: block;
        position: absolute;
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        border-top: 7px solid #3a5463;
        left: var(--leftPos);
        transform: translate(-50%, -14px);
    }

    .diagram-form input[type="range"] {
        margin: 0 0 3.6rem -14px;
        padding: 0;
    }

    li:last-child .diagram-form input[type="range"] {
        padding-bottom: 0;
    }

    .diagram-form input[type="range"] {
        -webkit-appearance: none;
        height: 9px;
        background: var(--apple-color-light);
        border-radius: 5px;
        background-image: linear-gradient(var(--apple-color),var(--apple-color));
        background-size: 0 100%;
        background-repeat: no-repeat;

    }

    .diagram-form input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        height: 1.5rem;
        width: 1.5rem;
        border-radius: 50%;
        background: #fff;
        border: 2px solid var(--apple-color);
        cursor: ew-resize;
        box-shadow: 0 0 2px 0 var(--apple-color);
        transition: background 0.3s ease-in-out;
    }

    .diagram-form input[type="range"]::-webkit-slider-runnable-track {
        -webkit-appearance: none;
        box-shadow: none;
        border: none;
        background: transparent;
    }

    ul.diagram-outputs {
        margin: 0;
        padding: 0;
    }

    .diagram-outputs-item {
        position: relative;
        margin: 0;
    }
    .diagram-outputs-item + .diagram-outputs-item {
        margin-top: 4rem;
    }

    .diagram-outputs-item::marker {
        color: var(--apple-color);
        font-size: 6.5rem;
        line-height: 0;
    }

    .diagram-output-title {
        font-size: 14px;
        line-height: 1.3em;
        font-weight: 400;
        transform: translate(10px, -19px);
        max-width: 300px;
        margin-bottom: -0.5rem;
        white-space: nowrap;
    }
    .diagram-output-title span{
        border-bottom: 1px dashed currentColor;
    }

    .diagram-output strong {
        font-size: 26px;
        font-weight: 500;
        margin-left: 7px;
        letter-spacing: -0.2px;
    }

    .diagram {
        position: relative;
        aspect-ratio: 1 / 1;
        transform: translate(36px, -36px);
        border-radius: 50%;
        background-color: aliceblue;
        border: 10px solid #fff;
        box-shadow: 1rem 2rem 3rem 0 rgba(157, 172, 184, 0.5);
    }

    .diagram canvas {
        position: relative;
        z-index: 1;
    }

    .diagram-total {
        position: absolute;
        width: 280px;
        height: 280px;
        z-index: 2;
        left: 50%;
        top: 50%;
        text-align: center;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 1rem;
        aspect-ratio: 1 / 1;
        border-radius: 50%;
        background-color: #fff;
    }

    .diagram-total-title {
        font-size: 24px;
        line-height: 1;
        white-space: nowrap;
        margin-bottom: 9px;
    }

    .diagram-total-summ {
        font-size: 40px;
        color: #60c23b;
        white-space: nowrap;
        font-weight: 500;
    }

    .color1 {
        color: #73f9c7;
    }
    .color2 {
        color: #66e07b;
    }
    .color3 {
        color: #ade568;
    }

    .business-intro {
        padding-bottom: 0rem;
        margin-bottom: -3rem;
    }

    .business-intro-content {
        display: grid;
        grid-template-columns: 1fr 45%;
        grid-template-rows: auto auto;
        grid-template-areas: 'title image''content image';
    }

    .business-image {
        grid-area: image;
        transform: translateX(26px);
        margin-bottom: 3rem;
    }

    .business-title {
        grid-area: title;
        align-self: end;
        font-size: 50px;
        font-weight: 800;
        padding-top: 2rem;
        line-height: 1.26;
        letter-spacing: 0.4px;
        margin: 0;
    }

    .business-subtitle {
        grid-area: subtitle;
        align-self: end;
        font-size: 30px;
        font-weight: 300;
        line-height: 1.2;
        max-width: 576px;
        margin: 0;
        padding-top: 0;
        transform: translateY(-4px);
    }

    .business-subtitle strong {
        font-size: 40px;
        font-weight: 800;
    }

    .business-description {
        grid-area: content;
        margin: 0;
        padding-top: 2rem;
        max-width: 800px;
        letter-spacing: -0.04px;
    }

    .yield {}

    .yield-intro {
        display: flex;
        padding-bottom: 32px;
    }
    .yield-intro p {
        flex: 1;
        padding-right: 53px;
        margin: 0;
        max-width: 787px;
    }
    .yield-intro .yield-param {
        flex: 0;
        transform: translateY(-68px);
    }

    .yield-param-title {
        font-size: 24px;
        font-weight: 600;
        white-space: nowrap;
        margin-bottom: 19px;
    }

    .yield-param-input {
        display: flex;
        padding-left: 0;
        margin-left: -0.3rem;
        align-items: center;
    }

    .yield-param-input input {
        max-width: 170px;
        height: 54px;
        border-radius: 6px;
        background-color: #3a5463;
        text-align: center;
        font-size: 35px;
        color: #fff;
        font-weight: 500;
        margin-right: 0px;
        border: 1px solid #cbcbcb;
        outline: 1px solid transparent;
    }

    .yield-param-input input[type=number]:-webkit-inner-spin-button,
    .yield-param-input:hover input[type=number]-webkit-outer-spin-button,
    .yield-param-input input[type=number]:-webkit-inner-spin-button,
    .yield-param-input:hover input[type=number]:-webkit-outer-spin-button {
        display: none;
        -webkit-appearance: none;
        opacity: 0;
        background-color: transparent;
    }

    .yield-param-input span {
        font-size: 33px;
        white-space: nowrap;
        font-weight: 500;
        color: #6d6d6d;
    }

    .yield-row {
        padding-bottom: 3rem;
    }

    .yield-formula {
        display: grid;
        grid-template-columns: 256px auto 233px auto auto 1fr;
        grid-template-rows: auto 2px auto;
        grid-template-areas: 'y1 y2 y3 y6 y7 params' 'y1 y2 y4 y6 y7 params' 'y1 y2 y5 y6 y7 params';
        text-align: center;
    }

    .y1 {
        grid-area: y1;
        align-self: center;
        font-size: 24px;
        font-weight: 300;
        text-align: left;
        line-height: 1.1;
        white-space: nowrap;

    }
    .y1 strong {
        font-size: 30px;
        font-weight: 900;
    }

    .y2 {
        grid-area: y2;
        align-self: center;
        font-size: 34px;
        transform: scaleX(1.2) translateY(4px);
        color: #707173;
        padding: 0 22px;
    }

    .y3,
    .y5,
    .y6 {
        font-size: 20px;
        font-weight: 500;
        line-height: 1;
        padding: 4px 0;
        color: #6d6d6d;
        white-space: nowrap;
    }

    .y3 {
        grid-area: y3;
        align-self: end;
        padding-bottom: 10px;
    }
    .y4 {
        grid-area: y4;
        background-color: #b8c1c6;

    }
    .y5 {
        grid-area: y5;
        padding-top: 10px;

    }
    .y6 {
        grid-area: y6;
        align-self: center;
        padding-left: 24px;

    }
    .y7 {
        grid-area: y7;
        align-self: center;
        font-size: 34px;
        transform: scaleX(1.2);
        color: #707173;
        padding: 0 42px;
    }

    .yield-formula .yield-param {
        grid-area: params;
        position: relative;
        align-self: center;
    }

    .yield-formula .yield-param-title {
        position: absolute;
        top: -52px;
        left: 2px;
    }

    .yield-param-number {
        text-align: center;
    }

    .yield-param-number > span{
        display: block;
        line-height: 1;
        font-size: 36px;
        font-weight: 600;
        background-color: var(--c-link);
        color: #fff;
        margin: 0 auto;
        max-width: 245px;
        padding: 2.4rem 0;
        border-radius: 7px;
        transform: translateX(-27px);
    }

    .business-cases {
        background-color: #f4f5f7;
    }

    .business-cases-title {
        text-align: center;
        margin-inline: auto;
        padding: 7rem 0 5rem;
        max-width: 929px;
        font-size: 30px;
        letter-spacing: 0.3px;
        margin-bottom: 0;
    }

    .cases-list {
        padding: 0;
    }

    .cases-list-item {
        list-style-type: none;
        margin: 0;
    }

    .cases-list-item + .cases-list-item {
        margin-top: 60px;
    }

    .case-article {
        display: grid;
        grid-template-columns: auto 1px 1fr;
        grid-template-rows: auto;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.15);
        padding: 30px 44px;
    }

    .case-article-header {
        width: 348px;
        padding-right: 30px;
    }
    .case-article-header > img:first-child {
        max-width: 260px;
        margin: 30px 0 22px;
    }
    .case-article-divider {
        background-color: #d8d8d8;
    }

    .case-article-info {
        margin-bottom: 50px;
    }

    .case-article-info p {
        margin: 0;
    }
    .case-article-info p + p {
        margin-top: 6px;
    }

    .case-article-person {
        margin: 0;
    }

    .case-article-picture {
        display: block;
        width: 78px;
        aspect-ratio: 1 / 1;
        border-radius: 50%;
        overflow: hidden;
        box-shadow: 0.5rem 0.5rem 1rem 0 rgba(0,0,0,0.15);
        margin-bottom: 24px;
    }

    .case-article-person figcaption {
        text-align: left;
    }

    .case-article-person figcaption strong {
        display: block;
        font-size: 16px;
        margin-bottom: -14px;
    }
    .case-article-person figcaption span {
        display: block;
        font-weight: normal;
        font-size: 16px;
    }

    .case-article-body {
        padding: 25px 20px 26px 66px;
    }

    .case-article-nums {
        padding: 0;
        margin-bottom: 47px;
    }
    .case-article-nums li {
        list-style-type: none;
        margin: 0;
    }
    .case-article-nums li + li {
        margin-top: 34px;
    }
    .case-article-nums li strong {
        font-size: 50px;
        font-weight: 500;
        margin-right: 9px;
    }
    .case-article-nums li strong small {
        font-size: 32px;
        font-weight: 500;
    }
    .case-article-review {
        margin-bottom: 46px;
    }
    .case-article-review p {
        margin: 0;
        letter-spacing: -0.14px;
    }
    .case-article-review p + p {
        margin-top: 22px;
    }
    .case-article-review p:first-child:before {
        content: '"';
    }
    .case-article-review p:last-child:after {
        content: '"';
    }

    .case-article-media {
        color: #475055;
        display: inline-flex;
        border: 1px solid #475055;
        padding: 6px 11px 5px 9px;
        align-items: center;
        gap: 4px;
        border-radius: 5px;
        transition: all 0.3s;
    }

    .case-article-media:hover {
        color: var(--c-link);
        border: 1px solid var(--c-link);
    }
    .case-article-media svg {
        fill: #475057;
        transition: fill 0.3s;
    }
    .case-article-media:hover svg {
        fill: var(--c-link);
    }

    .case-article-media span {
        letter-spacing: -0.15px;
    }

    .case-article-list {
        padding: 18px 3px 68px;
    }

    .case-article-block {
        list-style-type: none;
        margin: 0;
    }
    .case-article-block + .case-article-block {
        margin-top: 41px;
    }

    .case-article-figure {
        display: grid;
        margin: 0;
        grid-template-columns: 196px auto;
        grid-gap: 50px;
    }

    .case-article-figure figcaption {
        position: relative;
        align-self: flex-end;
        margin: 0;
        padding: 0 0 11px 22px;
        font-weight: normal;
        text-align: left;
        font-size: 16px;
    }
    .case-article-figure figcaption:before {
        content: '';
        display: inline-block;
        position: absolute;
        left: -8px;
        top: -5px;
        width: 30px;
        height: 30px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24'%3E%3Cpath fill='%2361c13b' d='M9 4h6v8h4.84L12 19.84L4.16 12H9V4Z'/%3E%3C/svg%3E");
        background-size: contain;
        background-position: center center;
    }

    .business-cases-footer {
        text-align: center;
        padding: 80px 0;
    }

    .yield-param-arrows{
        position: relative;
        z-index: 1;
        margin-left: -32px;
        background-color: #3a5463;
        border-radius: 4px;
        margin-right: 19px;
    }

    .arrs{
        display: flex;
        width: 30px;
        height: 50px;
        flex-direction: column;
        align-items: center;
        justify-content: center;

    }
    .arrs > button{
        width: 100%;
        height: 50%;
        border: none;
        outline: none;
        background-color: transparent;
        background-repeat: no-repeat;
        background-size: 50%;
        transition: all 0.2s;
    }

    .arrs > button:first-child{
        background-position: center bottom;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='32' viewBox='0 0 12 16'%3E%3Cpath fill-rule='evenodd' d='M12 11L6 5l-6 6h12z' fill='%23fff'/%3E%3C/svg%3E");
    }
    .arrs > button:last-child{
        background-position: center top;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='32' viewBox='0 0 12 16'%3E%3Cpath fill-rule='evenodd' d='M0 5l6 6l6-6H0z' fill='%23fff'/%3E%3C/svg%3E");
    }

    .arrs > button:first-child:hover{
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='32' viewBox='0 0 12 16'%3E%3Cpath fill-rule='evenodd' d='M12 11L6 5l-6 6h12z' fill='%2361c13b'/%3E%3C/svg%3E");
    }
    .arrs > button:last-child:hover{
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='32' viewBox='0 0 12 16'%3E%3Cpath fill-rule='evenodd' d='M0 5l6 6l6-6H0z' fill='%2361c13b'/%3E%3C/svg%3E");
    }

    #call-tooltip {
        cursor: pointer;
    }
    #call-tooltip:hover {
        color: var(--c-link);
        border-color: var(--c-link);
    }

    .diagram-tooltip{
        position: absolute;
        background-color: #fff;
        padding: 32px 40px 32px 39px;
        border-radius: 7px;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.15);
        z-index: 1;
        bottom: 6.5rem;
        left: -7.5rem;
        width: 766px;
        z-index: -1000;
        opacity: 0;
        visibility: hidden;
        transition: all 0.2s;
    }

    .diagram-tooltip.visible{
        opacity: 1;
        z-index: 10;
        visibility: visible;
    }

    .diagram-tooltip > strong{
        display: block;
        font-size: 25px;
        font-weight: 600;
        margin-bottom: 55px;
        margin-left: 0;
    }

    .diagram-tooltip > strong i{
        font-style: normal;
    }

    .diagram-tooltip > p{
        display: inline-block;
        position: relative;
        width: 261px;
        height: 112px;
        margin-left: 103px;
        padding: 15px 25px;
        border-radius: 10px;
        border: 5px solid #66E07B;
        font-size: 16px;
        line-height: 1.1;
    }

    .diagram-tooltip > p::before{
        content: "";
        z-index: 12;
        position: absolute;
        left: -109px;
        top: 6px;
        width: 109px;
        height: 106px;
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
        background-image: url('/img/business-effect/green-man.svg');
    }

    .diagram-tooltip > p + p{
        margin-left: 87px;
        width: 206px;
        border-color: #F7A8A1;
    }

    .diagram-tooltip > p + p::before{
        content: "";
        z-index: 12;
        position: absolute;
        width: calc(100% + 85px);
        top: 14px;
        left: -55px;
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
        background-image: url('/img/business-effect/pink-man.svg');
    }

    .diagram-tooltip > p > strong{
        color: var(--c-link);
        font-size: 16px;
        font-weight: 700;
        letter-spacing: 0.1px;
        margin-left: 0;
    }


    @media(max-width: 1201px) {
        .business-image {
            max-width: 390px;
            width: 100%;
            margin-right: auto;
            margin-bottom: 0;
        }

        .business-title {
            grid-area: title;
            align-self: center;
            font-size: 30px;
            font-weight: 800;
            padding-top: 0;
            line-height: 1.26;
            letter-spacing: 0.4px;
            margin: 0 0 2rem;
        }

        .business-subtitle {
            font-size: 20px;
        }

        .business-subtitle strong {
            font-size: 25px;
        }

        .saving-money {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto;
            grid-template-areas:'labels labels' 'emploes yield' 'chart chart';
            grid-gap: 1.5rem;
        }

        .range-sliders-header{
            margin: 3rem 0;
        }

        .yield-intro p{
            align-self: center;
            text-align: center;
            padding-right: 0;
            margin-bottom: 1rem;
        }

        .yield-param-input input{
            margin-left: auto;
        }

        .yield-param-input span{
            margin-right: auto;
        }

        .yield-param-title{
            text-align: center;
        }

        .range-sliders-header strong{
            margin: 0 0 1rem 0rem;
        }

        .range-sliders-header span{
            font-size: 12px;
            padding: 0.5rem 0.45rem;
            line-height: 1;
            letter-spacing: -0.1px;
        }

        .saving-money-column.-range-sliders {
            grid-area: emploes;
        }

        .saving-money-column.-total-nums {
            grid-area: yield;
            transform: translateY(0px);
        }
        .saving-money-column.-chart {
            grid-area: chart;
        }

        .diagram {
            max-width: 500px;
            transform: translate(0, 0);
            margin-inline: auto;
        }

        .diagram-form input[type="range"] {
            margin: 0 0 2em -14px;
        }

        .yield-intro {
            flex-direction: column;
        }
        .yield-intro .yield-param {
            flex: 1;
            transform: translateY(0);
        }
        .yield-param-input {
            padding-left: 0;
        }
        .saving-money .diagram-inputs {
            margin-left: 2.5rem;
        }

        .diagram-form label {
            padding-bottom: 2.4rem;
        }
        .diagram-form div::before {
            padding: 2px 7px 0;
            border-radius: 4px;
            left: var(--leftPos);
            font-size: 14px;
            font-weight: 500;
            transform: translate(-50%, -36px);
        }

        .yield-formula {
            display: grid;
            grid-template-columns: 1fr 1fr auto 1fr;
            grid-template-rows: auto auto auto 2px auto auto auto auto;
            grid-template-areas: '. y1 y1 .' '. y2 y2 .' '. y3 y6 .' '. y4 y6 .' '. y5 y6 .' '. y7 y7 .' '. params params .';
            text-align: center;
        }

        .yield-formula .yield-param-title {
            position: static;
            top: inherit;
        }
        .y1 {
            text-align: center;
            font-size: 22px;
        }
        .y1 strong {
            font-size: 27px;
        }
        .y3,
        .y5,
        .y6 {
            font-size: 18px;
        }
        .y2,
        .y5 {
            padding-bottom: 1rem;
        }
        .yield-param-number {
            text-align: center;
        }
        .y6 {
            padding-left: 15px;
            transform: translateY(-7px);
        }

        .business-cases-title {
            padding: 3rem 0;
            font-size: 24px;
        }
        .case-article-header {
            width: 300px;
            padding-right: 30px;
        }

        .case-article-body {
            padding: 20px;
        }

        .case-article-nums li strong {
            font-size: 30px;
        }
        .case-article-nums span {
            font-size: 14px;
        }
        .case-article-media span {
            font-size: 14px;
            white-space: nowrap;
        }
        .cases-list-item + .cases-list-item {
            margin-top: 30px;
        }

        .case-article-figure {
            grid-template-columns: 1fr;
            grid-template-rows: auto auto;
            grid-gap: 2rem;
        }

        .case-article-figure img{
            max-width: 200px;
        }

        .diagram {
            margin: 0 auto;
        }

        .diagram canvas{
            width: 100% !important;
            height: 100% !important;
            margin: 0 auto;
        }

        .yield-param-number > span{
            transform: translateX(0px);
        }

        .diagram-tooltip {
            bottom: 4.5rem;
            padding: 15px 20px 32px 36px;
            left: inherit;
            right: 0;
            width: 330px;
        }

        .diagram-tooltip strong{
            width: 240px;
            margin-bottom: 13px;
            font-size: 16px;
            line-height: 1.18;
            letter-spacing: -0.1px;
        }

        .diagram-tooltip > p{
            width: 202px;
            height: 89px;
            padding: 11px 17px 11px 21px;
            font-size: 12px;
            margin-left: 54px;
        }

        .diagram-tooltip > p + p{
            margin-top: 16px;
            width: 160px;
            padding: 11px 17px 11px 21px;
            margin-left: 54px;
        }

        .diagram-tooltip > p + p::before{
            width: calc(100% + 105px);
            top: 11px;
            left: -44px;
            background-image: url('/img/business-effect/pink-man2.svg');
        }

        .diagram-tooltip > p::before{
            width: 81px;
            height: 78px;
            left: -81px;
        }

        .splide-business-video .videos-link{
            max-width: 270px;
            margin: 0 auto;
        }
    }

    @media(max-width: 830px) {
        .business-title {
            font-size: 20px;
        }
        .business-description {
            font-size: 14px;
        }
    }
    @media(max-width: 800px) {
        .case-article {
            grid-template-columns: 1fr;
            grid-template-rows: auto 1px auto;
            padding: 20px 30px;
        }
        .case-article-header {
            width: auto;
            padding-right: 0;
            padding-bottom: 20px;
        }
        .case-article-body {
            padding: 20px 0 0;
        }
        .case-article-nums li + li {
            margin-top: 1rem;
        }
        .case-article-nums {
            margin-bottom: 20px;
        }
        .case-article-review {
            margin-bottom: 20px;
        }
        .case-article-list {
            padding: 1rem 3px;
        }
        .case-article-block + .case-article-block {
            margin-top: 40px;
        }
        .business-cases-footer {
            text-align: center;
            padding: 20px 0 40px;
        }
        .case-article-figure {
            grid-template-columns: 1fr;
            grid-template-rows: auto auto;
            grid-gap: 1rem;
        }
    }

    @media(max-width: 576px) {
        .business-intro-content {
            grid-template-columns: 1fr;
            grid-template-areas: 'image' 'title' 'subtitle' 'content';
        }
        .business-title br {
            display: none;
        }
        .business-intro {
            padding-bottom: 1rem;
        }
        .business-calculator {
            padding: 1rem 0;
        }
        .business-description {
            padding-top: 0;
        }
        .diagram-form label {
            font-size: 12px;
        }
        .diagram-output-title {
            font-size: 12px;
            white-space: normal;
        }
        .diagram-outputs-item::marker {
            display: none;
            font-size: 3.5rem;
        }

        .diagram-total {
            width: 180px;
            height: 180px;
        }
        .saving-money .diagram-inputs {
            margin-left: 0.5rem;
        }
        .case-article {
            grid-template-columns: calc(100vw - 8rem);
        }
        .case-article-media svg {
            display: none;
        }
        .business-image {
            max-width: 300px;
            transform: none;
        }
        .diagram-form div::before {
            border-radius: 3px;
            font-size: 11px;
            font-weight: 400;
            transform: translate(-50%, -30px);
        }

        .saving-money-column.-range-sliders {
            padding-inline: 1rem;
        }

        .yield-intro {
            padding-bottom: 2rem;
            text-align: center;
        }

        .yield-intro p {
            padding-right: 0;
        }

        .yield-param-input input {
            max-width: 150px;
            height: 50px;
            border-radius: 4px;
            font-size: 1.4rem;
            color: #fff;
            font-weight: 500;
            margin-right: 1rem;
            margin-left: auto;
        }
        .yield-param-arrows {
            position: relative;
            z-index: 1;
            margin-left: -50px;
        }

        .arrs{
            height: 48px;
        }

        .yield-param-input input::-webkit-outer-spin-button,
        .yield-param-input input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .yield-param-input input[type=number] {
            -moz-appearance: textfield;
            width: 140px;
        }

        .yield-param-input span {
            margin-right: auto;
        }
        .yield-formula {
            grid-template-columns: 1rem 1fr auto 1rem;
        }
        .case-article-media span {
            font-size: 13px;
            white-space: normal;
            text-align: center;
        }

        .diagram canvas{
            width: 100% !important;
            height: 100% !important;
        }
        .diagram-total-title {
            font-size: 1rem;
        }

        .range-sliders-header form{
            flex-direction: column;
            max-width: 80vw;
        }
        .yield-param-number > span{
            font-size: 2rem;
            max-width: 200px;
            padding: 1.4rem 0;
            border-radius: 7px;
        }
        .diagram-total-summ{
            font-size: 24px;
        }

        .diagram-tooltip{
            width: calc(100vw - 4rem);
        }

        .diagram-output strong{
            font-size: 18px;
        }
    }

    .splide-business-video-item{
        padding: 0 1rem clamp(4rem, 2.857142857142857rem + 5.714285714285714vw, 8rem) !important;
    }

    @media(max-width: 400px) {
        .diagram-tooltip{
            width: calc(100vw - 1.8rem);
            right: -1.2rem;
        }
    }


    @media(max-width: 992px) {
        .form-content-footer {
            background-image: url("/img/business-effect/elena2.png") !important;
            background-size: 25vw !important;
            background-position: left bottom !important;
        }
        .splide-business-video .videos-block:after{
            display: none !important;
        }
    }
    @media(max-width: 769px) {
        .page-type-standart .free-test-photo {
            transform: scale(201%) translate(-19%, -25%);
        }
    }
</style>

<section class="business-effect" style="margin-top: 0">
    <section class="business-intro">
        <div class="container">
            <div class="business-intro-content">
                <img class="business-image" src="/img/business-effect/calculator-roi_picture.svg" alt="Посчитайте вашу <br>выгоду от инвестиций <br>в вовлеченность <br>и лояльность (ROI)">
                <h1 class="business-title">Посчитайте вашу <br>выгоду от инвестиций <br>в вовлеченность <br>и лояльность (ROI)</h1>
                <p class="business-description">Руководители компаний всегда хотят знать, на какую выгоду можно рассчитывать при вложении средств в HR проекты. Одним из самых точных показателей, который может ответить на данный вопрос, является ROI (Return on Investment) - процент окупаемости инвестиций</p>
            </div>
        </div>
    </section>

    <section class="business-calculator">
        <div class="container">
            <div class="saving-money">
                <div class="range-sliders-header">
                    <strong>Ваша отрасль</strong>
                    <form id="formLabels">
                        <label for="smi-1">
                            <input type="radio" name="saving-money-industry" id="smi-1" data-yield-1="0.05" data-yield-2="0.25" checked>
                            <span>с большой ротацией кадров <br>и налаженным онбордингом</span>
                        </label>
                        <label for="smi-2">
                            <input type="radio" name="saving-money-industry" id="smi-2" data-yield-1="0.1" data-yield-2="0.5">
                            <span>с низкой ротацией кадров <br>и штучным подбором</span>
                        </label>
                    </form>
                </div>
                <div class="saving-money-column -range-sliders">
                    <ul class="diagram-inputs">
                        <li class="diagram-inputs-item">
                            <form class="diagram-form">
                                <label for="number-of-employes">Кол-во сотрудников</label>
                                <div id="number-of-employes-value" data-value="0"></div>
                                <input type="range" value="0" min="0" max="500000" id="number-of-employes" name="number_of_employes">
                            </form>
                        </li>
                        <li class="diagram-inputs-item">
                            <form class="diagram-form">
                                <label for="average-annual-salary">Среднегодовая зарплата</label>
                                <div id="average-annual-salary-value" data-value="400 тыс.руб."></div>
                                <input type="range" value="400" min="400" max="3000" id="average-annual-salary" name="average_annual_salary" step="100">
                            </form>
                        </li>
                        <li class="diagram-inputs-item">
                            <form class="diagram-form">
                                <label for="employee-turnover-rate">Текучесть кадров</label>
                                <div id="employee-turnover-rate-value" data-value="3%"></div>
                                <input type="range" value="3" min="3" max="100" id="employee-turnover-rate" name="employee_turnover_rate">
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="saving-money-column -total-nums">
                    <ul class="diagram-outputs">
                        <li class="diagram-outputs-item diagram-output" style="list-style-image: url( /img/business-effect/marker-1.svg)">
                            <div class="diagram-tooltip">
                                <strong>Рост продуктивности среды на <i>10</i>% за счет</strong>
                                <p>Мотивация на результат Энергия Инициативность Внедрение проектов</p>
                                <p>Абсентизм Прокрастинация Бюррократия Время процессов</p>
                            </div>
                            <p class="diagram-output-title">
                                Выгода от повышения <br> вовлеченности - <span id="call-tooltip">продуктивности</span>
                            </p>
                            <strong style="color: #66e07b;">
                                <span id="productivity-savings">0</span> ₽
                            </strong>
                        </li>
                        <li class="diagram-outputs-item diagram-output" style="list-style-image: url( /img/business-effect/marker-3.svg)">
                            <p class="diagram-output-title">
                                Выгода от снижения текучести персонала <br>в 2 раза (роста лояльности)
                            </p>
                            <strong style="color: #bddf28;">
                                <span id="turnover-savings">0</span> ₽
                            </strong>
                        </li>
                    </ul>
                </div>
                <div class="saving-money-column -chart">
                    <div class="diagram">
                        <div class="diagram-total">
                            <strong class="diagram-total-title">Общая<br>выгода за 1 год</strong>
                            <strong class="diagram-total-summ" id="diagram-total-summ">
                                <span>0</span> ₽
                            </strong>
                        </div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="yield">
                <div class="yield-intro">
                    <p>Сколько вы готовы тратить на оценку и развитие вовлеченности и лояльности?</p>
                    <div class="yield-param">
                        <div class="yield-param-title" style="margin-left: -24px;">Инвестиции за 1 год</div>
                        <div class="yield-param-input" id="yield-param-input-wrapper">
                            <input type="number" name="yield-param-input" id="yield-param-input" value="1" min="1" max="999">
                            <div class="yield-param-arrows">
                                <div class="arrs">
                                    <button id="arr-plus"></button>
                                    <button id="arr-minus"></button>
                                </div>
                            </div>
                            <span>МЛН ₽</span>
                        </div>
                    </div>
                </div>
                <div class="yield-row">
                    <div class="yield-formula">
                        <div class="y1"><strong>ROI</strong> от инвестиций <br>в вовлеченность <br>и лояльность</div>
                        <div class="y2">=</div>
                        <div class="y3">
                            <span id="item-1" data-value="0">0</span>
                            —
                            <span id="item-2">1 МЛН ₽</span>
                        </div>
                        <div class="y4"></div>
                        <div class="y5">
                            <span id="item-3" data-value="1000000">1 МЛН ₽</span></div>
                        <div class="y6">x 100%</div>
                        <div class="y7">=</div>
                        <div class="yield-param">
                            <div class="yield-param-title">Доходность за 1 год</div>
                            <div class="yield-param-number">
                <span>
                  <span id="item-4">0</span> %
                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="business-cases">
        <div class="container">
            <h2 class="business-cases-title">Наши клиенты рассказывают, каких показателей достигли, используя платформу Happy Job</h2>
            <ul class="business-cases-list cases-list">
                <li class="cases-list-item">
                    <article class="cases-list-article case-article">
                        <header class="case-article-header">
                            <img src="/img/business-effect/magnit-logo.jpg" alt="Retail">
                            <div class="case-article-info">
                                <p>Retail, 360 000 сотрудников</p>
                                <p>3 года с Happy Job</p>
                            </div>
                            <figure class="case-article-person">
                    <span class="case-article-picture">
                      <img src="/img/business-effect/magnit-person.png" alt="Вера Долгова">
                    </span>
                                <figcaption>
                                    <strong>Вера Долгова</strong><br>
                                    <span>Руководитель управления исследований, аналитики и нематериальной мотивации</span>
                                </figcaption>
                            </figure>
                        </header>
                        <div class="case-article-divider"></div>
                        <div class="case-article-body">
                            <ul class="case-article-nums">
                                <li>
                                    <strong>+9.3%</strong>
                                    <span>рост лояльности</span>

                                </li>
                                <li>
                                    <strong>+19.9%</strong>
                                    <span>рост eNPS</span>

                                </li>
                                <li>
                                    <strong>+7.7%</strong>
                                    <span>рост удовлетворенности</span>

                                </li>
                            </ul>
                            <div class="case-article-review">
                                <p>Повысили процент участия в опросах на 17,5% за счёт масштабной PR кампании и разных каналов распространения опроса.</p>
                                <p>В результате реализации программы развития вовлеченности и лояльности получили <strong>рост всех целевых показателей</strong> в период с 2021 по 2022 год</p>
                            </div>
                            <a data-src="https://vimeo.com/797367699" data-fancybox="video-gallery" class="case-article-media">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 24 24">
                                    <path d="M9.525 18.025q-.5.325-1.012.038T8 17.175V6.825q0-.6.513-.888t1.012.038l8.15 5.175q.45.3.45.85t-.45.85l-8.15 5.175Z"></path>
                                </svg>
                                <span>Смотреть полный вебинар «Магнит»</span>
                            </a>
                        </div>
                    </article>
                </li>
                <li class="cases-list-item">
                    <article class="cases-list-article case-article">
                        <header class="case-article-header">
                            <img src="/img/business-effect/evroplan-logo.jpg" alt="Лизинг">
                            <div class="case-article-info">
                                <p>Лизинг, 4 500 сотрудников</p>
                                <p>6 лет с Happy Job</p>
                            </div>
                            <figure class="case-article-person">
                    <span class="case-article-picture">
                      <img src="/img/business-effect/evroplan-person.png" alt="Анаит Говорина">
                    </span>
                                <figcaption>
                                    <strong>Анаит Говорина</strong><br>
                                    <span>Директор департамента по работе с персоналом</span>
                                </figcaption>
                            </figure>
                        </header>
                        <div class="case-article-divider"></div>
                        <div class="case-article-body">
                            <ul class="case-article-nums">
                                <li>
                                    <strong style="display:block;">
                                        <small>в</small>
                                        2
                                        <small>раза</small>
                                    </strong>
                                    <span>снизили уровень текучести</span>

                                </li>
                                <li>
                                    <strong style="display:block;">
                                        <small>с</small>
                                        65% <small>до</small>
                                        95%</strong>
                                    <span>рост индекса вовлеченности персонала</span>

                                </li>
                            </ul>
                            <div class="case-article-review">
                                <p><strong>Повысили вовлеченность</strong> за счёт точечной проработки ключевых метрик и зон роста в каждом отдельном подразделении.</p>
                                <p>На основе данных, полученных в ходе исследования Happy Job, удалось сформировать четкий EVP, укрепить HR бренд, наладить каналы непрерывной обратной связи.</p>
                            </div>
                            <a data-src="https://vimeo.com/586641979" data-fancybox="video-gallery" class="case-article-media">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 24 24">
                                    <path d="M9.525 18.025q-.5.325-1.012.038T8 17.175V6.825q0-.6.513-.888t1.012.038l8.15 5.175q.45.3.45.85t-.45.85l-8.15 5.175Z"></path>
                                </svg>
                                <span>Смотреть полное интервью</span>
                            </a>
                        </div>
                    </article>
                </li>
                <li class="cases-list-item">
                    <article class="cases-list-article case-article">
                        <header class="case-article-header">
                            <img src="/img/business-effect/technonikol-logo.jpg" alt="Retail">
                            <div class="case-article-info">
                                <p>Retail, 6 500 сотрудников</p>
                                <p>5 лет с Happy Job</p>
                            </div>
                            <figure class="case-article-person">
                    <span class="case-article-picture">
                      <img src="/img/business-effect/technonikol-person.png" alt="Юлия Корочкина">
                    </span>
                                <figcaption>
                                    <strong>Юлия Корочкина</strong><br>
                                    <span>HRD, TC Технониколь</span>
                                </figcaption>
                            </figure>
                        </header>
                        <div class="case-article-divider"></div>
                        <div class="case-article-body">
                            <ul class="case-article-nums">
                                <li>
                                    <strong style="display:block;">
                                        <small>в</small>
                                        2
                                        <small>раза</small>
                                    </strong>
                                    <span>снизили уровень текучести</span>

                                </li>
                            </ul>
                            <div class="case-article-review">
                                <p>Прорабатывали проблемные участки на федеральном уровне, внедряли изменения сразу во все подразделения компании. Отдельно работали с анонимными текстовыми комментариями от сотрудников.</p>
                                <p>По итогам опроса 2021 года Торговая Сеть ТЕХНОНИКОЛЬ показала лучшие значения в сфере стройматериалов.</p>
                            </div>
                            <ul class="case-article-list">
                                <li class="case-article-block">
                                    <figure class="case-article-figure">
                              <span>
                                <img src="/img/business-effect/chart-1.jpg" alt="Текучесть персонала">
                              </span>
                                        <figcaption>Текучесть персонала</figcaption>
                                    </figure>
                                </li>
                                <li class="case-article-block">
                                    <figure class="case-article-figure">
                              <span>
                                <img src="/img/business-effect/chart-2.jpg" alt="Доля руководителей, принимаемых извне в компанию">
                              </span>
                                        <figcaption>Доля руководителей, принимаемых извне в компанию</figcaption>
                                    </figure>
                                </li>
                                <li class="case-article-block">
                                    <figure class="case-article-figure">
                              <span>
                                <img src="/img/business-effect/chart-3.jpg" alt="Увольняются на испытательном сроке по собственной инициативе">
                              </span>
                                        <figcaption>Увольняются на испытательном сроке по собственной инициативе</figcaption>
                                    </figure>
                                </li>
                            </ul>
                            <a data-src="https://vimeo.com/741869709" data-fancybox="video-gallery" class="case-article-media">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 24 24">
                                    <path d="M9.525 18.025q-.5.325-1.012.038T8 17.175V6.825q0-.6.513-.888t1.012.038l8.15 5.175q.45.3.45.85t-.45.85l-8.15 5.175Z"></path>
                                </svg>
                                <span>Смотреть полный вебинар «Технониколь»</span>
                            </a>
                        </div>
                    </article>
                </li>
            </ul>
        </div>
        <div class="business-cases-footer">
            <a href="/cases/" class="button-outline">Смотреть ещё кейсы</a>
        </div>
    </section>


    <style>
        .videos {
            box-shadow: inset -2px 4px 17px rgb(0 0 0 / 10%);
        }


        .videos-link {
            position: relative;
            display: block;
            cursor: pointer;
        }

        .videos-block{
            aspect-ratio: 30 / 17;
            margin: 0;
        }

        .videos-block .videos-image-wrapper {
            position: relative;
            z-index: 2;
            height: 100%;
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
        .splide-business-video .videos-block:after {
            content: "";
            position: absolute;
            height: 227px;
            opacity: 0.7;
            left: 1rem;
            right: 1rem;
            margin: auto;
            transform: scale(1, 0.1);
            z-index: 0;
            top: inherit;
            bottom: -60%;
            background: -moz-radial-gradient( center, ellipse cover, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0) 68%, rgba(0, 0, 0, 0) 69% );
            background: -webkit-radial-gradient( center, ellipse cover, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0) 68%, rgba(0, 0, 0, 0) 69% );
            background: radial-gradient( ellipse at center, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0) 68%, rgba(0, 0, 0, 0) 69% );
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
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

        .splide-business-list{
            display: flex;
            flex-flow: row wrap;
            margin: 0 -1rem;
            padding: 0;
            justify-content: center;
        }

        .splide-business-video-item{
            padding: 0;
            list-style-type: none;
            width: 270px;
            min-width: 270px;
            flex: 1;
            margin: 0;
            padding-bottom: 8rem;
        }

        @media(max-width: 992px){
            .splide-business-video-item {
                padding-bottom: 5rem;
            }
            .splide-business-list{
                padding-bottom: 2rem;
            }
            .videos-block .videos-image-wrapper{
                max-height: inherit;
            }
        }

    </style>

    <section class="videos">
        <header class="section-header">
            <h2 class="section-title">Видео на тему</h2>
        </header>
        <div class="container">
            <section class="splide-business-video">
                <ul class="splide-business-list">
                    <li class="splide-business-video-item" itemprop="video" itemscope="" itemtype="https://schema.org/VideoObject">
                        <meta itemprop="uploadDate" content="2022-03-05T00:00:00">
                        <a class="videos-link" data-fancybox href="https://vimeo.com/560760387?autoplay=1">
                            <figure class="videos-block">
                <span class="videos-image-wrapper">
                  <picture>
                    <source srcset="/img/video/previews/560760387.webp" type="image/webp"><img src="/img/video/previews/560760387.jpg" class="videos-image" loading="lazy" alt="Экономическая польза оценки вовлеченности" title="Экономическая польза оценки вовлеченности" itemprop="thumbnailUrl">
                  </picture>
                </span>
                                <figcaption class="videos-caption">
                                    <div class="videos-heading" itemprop="name">
                                        Экономическая польза оценки вовлеченности
                                    </div>
                                    <div itemprop="description" style="display: none" hidden>
                                        Видео Happy Job
                                    </div>
                                </figcaption>
                            </figure>
                            <b class="videos-play-button">
                                <div class="play-button">
                                    <svg class="play-circle">
                                        <use xlink:href="#videoCircle"></use>
                                    </svg>
                                    <svg class="play-triangle">
                                        <use xlink:href="#videoTriangle"></use>
                                    </svg>
                                </div>
                            </b>
                        </a>
                    </li>
                    <li class="splide-business-video-item" itemprop="video" itemscope="" itemtype="https://schema.org/VideoObject">
                        <meta itemprop="uploadDate" content="2022-03-05T00:00:00">
                        <a class="videos-link" data-fancybox href="https://vimeo.com/558544165?autoplay=1">
                            <figure class="videos-block">
                <span class="videos-image-wrapper">
                  <picture>
                    <source srcset="/img/video/previews/558544165.webp" type="image/webp"><img src="/img/video/previews/558544165.jpg" class="videos-image" loading="lazy" alt="Экономическая польза оценки лояльности" title="Экономическая польза оценки лояльности" itemprop="thumbnailUrl">
                  </picture>
                </span>
                                <figcaption class="videos-caption">
                                    <div class="videos-heading" itemprop="name">
                                        Экономическая польза оценки лояльности
                                    </div>
                                    <div itemprop="description" style="display: none" hidden>
                                        Видео Happy Job
                                    </div>
                                </figcaption>
                            </figure>
                            <b class="videos-play-button">
                                <div class="play-button">
                                    <svg class="play-circle">
                                        <use xlink:href="#videoCircle"></use>
                                    </svg>
                                    <svg class="play-triangle">
                                        <use xlink:href="#videoTriangle"></use>
                                    </svg>
                                </div>
                            </b>
                        </a>
                    </li>

                    <!--  -->

                    <li class="splide-business-video-item" itemprop="video" itemscope="" itemtype="https://schema.org/VideoObject">
                        <meta itemprop="uploadDate" content="2022-03-05T00:00:00">
                        <a class="videos-link" data-fancybox href="https://vimeo.com/461290977?autoplay=1">
                            <figure class="videos-block">
                <span class="videos-image-wrapper">
                  <picture>
                    <source srcset="/img/video/previews/461290977.webp" type="image/webp"><img src="/img/video/previews/461290977.jpg" class="videos-image" loading="lazy" alt="Зачем измерять вовлеченность и лояльность?" title="Зачем измерять вовлеченность и лояльность?" itemprop="thumbnailUrl">
                  </picture>
                </span>
                                <figcaption class="videos-caption">
                                    <div class="videos-heading" itemprop="name">
                                        Зачем измерять вовлеченность и лояльность?
                                    </div>
                                    <div itemprop="description" style="display: none" hidden>
                                        Видео Happy Job
                                    </div>
                                </figcaption>
                            </figure>
                            <b class="videos-play-button">
                                <div class="play-button">
                                    <svg class="play-circle">
                                        <use xlink:href="#videoCircle"></use>
                                    </svg>
                                    <svg class="play-triangle">
                                        <use xlink:href="#videoTriangle"></use>
                                    </svg>
                                </div>
                            </b>
                        </a>
                    </li>
                </ul>
            </section></div>
    </section>

</section>
<style>
    .topbanner{
        width: 100%;
        height: 120px;
        top: 0;
        left: 0;
        background-position: center;
        background-size: cover;
        background-image: url(/img/topbanner.jpg);
        background-repeat: no-repeat;
        background-color: #000;
        z-index: 100;
        overflow: hidden;
    }
    .topbanner__bg{
        position: absolute;
        z-index: 0;
        top: -52%;
        left: 0;
        width: 100%;
        font-size: 205px;
        line-height: 1;
        font-weight: 900;
        color: #b3b3b3;
        text-align: center;
        -webkit-text-stroke-width: 0.7pt;
        -webkit-text-stroke-color: #fff;
        opacity: 0.1;
        white-space: nowrap;
    }
    .topbanner__bg span{
        font-size: 0.78em;
    }
    .topbanner .container{
        position: relative;
        z-index: 1;
        height: 100%;
    }
    .topbanner__block{
        color: #fff;
        font-weight: 900;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        line-height: 1.2;
    }
    .topbanner__title{
        font-size: 28px;
        margin-right: 25px;
    }
    .topbanner__title span{
        letter-spacing: 0.018em;
    }
    .topbanner__text{
    }
    .topbanner__year{
        font-size: 34px;
        letter-spacing: 0.02em;
    }
    .topbanner__dop{
        font-size: 16px;
        color: #20dbaa;
        letter-spacing: -0.01em;
    }
    .topbanner__button{
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
    }
    .topbanner__button a{
        color: #fff;
        font-size: 16px;
        line-height: 1;
        padding: 10px 22px;
        cursor: pointer;
        position: relative;
    }
    .topbanner__button a::before{
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        border: 1px solid #fff;
        border-radius: 4px;
        transition: transform 0.3s;
    }
    .topbanner__button a:hover::before{
        transform: scale(1.05);
    }
    @media (max-width: 991px){
        .topbanner{
            text-align: center;
        }
        .topbanner__block{
            height: auto;
            text-align: left;
            padding-top: 5px;
        }
        .topbanner__title{
            font-size: 22px;
        }
        .topbanner__year{
            font-size: 27px;
        }
        .topbanner__dop{
            font-size: 12px;
        }
        .topbanner__button{
            position: relative;
            top: 0;
            transform: none;
            margin: 15px auto 0;
        }
    }
    @media (max-width: 500px){
        .topbanner .container{
            padding: 0;
        }
        .topbanner__block{
            padding-top: 15px;
        }
        .topbanner__title{
            font-size: 16px;
        }
        .topbanner__year{
            font-size: 22px;
        }
        .topbanner__dop{
            font-size: 10px;
            letter-spacing: 0.015em;
        }
        .topbanner__button{
            margin-top: 20px;
        }
    }

    .header-wrapper, .newheader{
        top: 120px !important;
    }
    .container > main{
        padding-top: 0 !important;
    }
    .blog-header-padding{
        height: 0 !important;
    }
    .intro{
        margin-top: 0 !important;
    }

    @media (max-width: 1200px){
        .topbanner{
            display: none;
            visibility: hidden;
        }
        .header-wrapper, .newheader{
            top: 0px !important;
        }
    }

</style>
<div class="topbanner topbannerID">
    <div class="topbanner__bg">тренды <span>21-22</span></div>
    <div class="container">
        <div class="topbanner__block">
            <div class="topbanner__title">
                Тренды вовлеченности <br>
                <span>и лояльности в России</span>
            </div>
            <div class="topbanner__text">
                <div class="topbanner__year">
                    2021-22
                </div>
                <div class="topbanner__dop">
                    + прогнозы 2023
                </div>
            </div>
        </div>
        <div class="topbanner__button">
            <a href="/trends/">Получить отчет</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById("myChart");

    const investsWrapper = document.getElementById('yield-param-input-wrapper');
    const invests = document.getElementById('yield-param-input');
    const plusInvest = document.getElementById('arr-plus');
    const minusInvest = document.getElementById('arr-minus');
    const elem_1 = document.getElementById('item-1');
    const elem_2 = document.getElementById('item-2');
    const elem_3 = document.getElementById('item-3');
    const elem_4 = document.getElementById('item-4');

    const toollink = document.getElementById("call-tooltip");
    const tooltip = document.querySelector(".diagram-tooltip");

    toollink.addEventListener("mouseover", (event) => {
        tooltip.classList.add("visible")
    });

    toollink.addEventListener("mouseout", (event) => {
        tooltip.classList.remove("visible")
    });


    const smallButts = (val) => {
        let curr = parseInt(val)
        console.log(curr)
        const totalNode = document.getElementById('diagram-total-summ')
        const total = totalNode.getAttribute("data-value");
        console.log(total)
        let realCurr = curr * 1000000
        elem_2.innerText = curr + " МЛН ₽"
        elem_2.setAttribute("data-value", realCurr)
        elem_3.innerText = curr + " МЛН ₽"
        elem_3.setAttribute("data-value", realCurr)

        function calc(total, realCur) {
            let totalPercent = (((total - (realCurr)) / ((realCurr))) * 100).toFixed(0)
            if (totalPercent !== NaN) {
                return totalPercent
            } else {
                return ''
            }
        }
        elem_4.innerText = calc(total, realCurr)
    }


    plusInvest.addEventListener('click', function(){
        let curr = parseInt(invests.value)
        if(curr < 1000){
            invests.value = curr + 1
            smallButts(invests.value)
        }else{
            return false
        }
    })
    minusInvest.addEventListener('click', function(){
        let curr = parseInt(invests.value)
        if(curr > 1){
            invests.value = curr - 1
            smallButts(invests.value)
        }else{
            return false
        }
    })




    const data = {
        labels: [
            "Экономия от снижения текучести кадров", "Экономия от повышения продуктивности", "Экономия от снижения абсентеизма"
        ],
        datasets: [
            {
                data: [
                    0, 0, 0
                ],
                backgroundColor: [
                    "#ade568", "#73f9c7", "#66e07b"
                ],
                borderWidth: 0,
                clip: false,
                hoverOffset: 16,
                cutout: 95
            }
        ]
    };
    if (window.innerWidth < 481) {
        data
            .datasets[0]
            .cutout = 70;
    }

    const chart = new Chart(ctx, {
        type: "doughnut",
        data: data,
        options: {
            layout: {
                padding: 16
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: "#61c13a",
                    titleColor: "White",
                    cornerRadius: 4,
                    displayColors: false,
                    bodyAlign: "center",
                    enabled: false,
                    callbacks: {
                        label: function (context) {
                            let label = context.raw || "";
                            if (context.parsed !== null) {
                                if (context.raw >= 1000000) {
                                    if (context.raw >= 1000000000) {
                                        label = (parseFloat(context.raw / 1000000000)).toFixed(1) + ' МЛРД';
                                    } else {
                                        label = (parseFloat(context.raw / 1000000)).toFixed(1) + ' МЛН';
                                    }
                                } else {
                                    label = context
                                        .raw
                                        .toLocaleString('ru');
                                }
                            }
                            return label;
                        }
                    }
                }
            }
        }
    });

    window.addEventListener("load", () => {

        const rangeInputs = document.querySelectorAll('input[type="range"]')

        const formLabels = document.getElementById('formLabels')
        const firstCheck = document.getElementById('smi-1')
        const twoCheck = document.getElementById('smi-2')

        let koef1 = 0.05, koef2 = 0.25

        function checkLab(){
            if(firstCheck.checked){
                $('.diagram-tooltip i')[0].innerHTML  = '10';
                koef1 = parseFloat(firstCheck.getAttribute('data-yield-1'));
                koef2 = parseFloat(firstCheck.getAttribute('data-yield-2'));
                // console.log(koef1 + "_" + koef2);
            }

            if(twoCheck.checked){
                $('.diagram-tooltip i')[0].innerHTML = '5';
                koef1 = parseFloat(twoCheck.getAttribute('data-yield-1'));
                koef2 = parseFloat(twoCheck.getAttribute('data-yield-2'));
                // console.log(koef1 + "_" + koef2);
            }
        }
        checkLab()



        function handleInputChange(e) {
            let target = e.target
            /* >>> */
            let indicator = target.previousElementSibling
            if (e.target.type !== 'range') {
                target = document.getElementById('range')
            }
            const min = target.min
            const max = target.max
            const val = target.value
            /* VVV */
            let posx = (val - min) * 100 / (max - min)
            let marginPosx = posx / 25
            indicator
                .style
                .setProperty('--leftPos', (posx - marginPosx + '%'));
            /* ::: */
            target.style.backgroundSize = (val - min) * 100 / (max - min) + '% 100%'
        }

        rangeInputs.forEach(input => {
            input.addEventListener('input', handleInputChange)
        })

        var numOfEmployees = document.getElementById("number-of-employes");
        var numOfEmployeesVal = document.getElementById("number-of-employes-value");
        var numOfEmployeesReal = numOfEmployees.value;

        console.log("change obx");

        var avgAnnualSalary = document.getElementById("average-annual-salary");
        var avgAnnualSalaryVal = document.getElementById("average-annual-salary-value");
        var avgAnnualSalaryReal = 0;
        var employeeTurnoverRate = document.getElementById("employee-turnover-rate");
        var employeeTurnoverRateVal = document.getElementById("employee-turnover-rate-value");
        var employeeTurnoverRateReal = 0;
        var productivitySavings = document.getElementById("productivity-savings");
        var turnoverSavings = document.getElementById("turnover-savings");
        var chartNumber = document.getElementById("diagram-total-summ");

        console.log(numOfEmployees.value, avgAnnualSalary.value, employeeTurnoverRate.value, productivitySavings.innerText, turnoverSavings.innerText);


        const numInput = document.getElementById("yield-param-input");

        numInput.addEventListener("input", (event) => {
            if( (event.target.value == 0) || (event.target.value === '') ){
                event.target.value = 1;
            }
            if(event.target.value.length == 1){
                event.target.value = 1;
                return false
            }
        });


        const config = {
            subtree: true,
            characterDataOldValue: true,
            childList: true,
            characterData: true
        };

        const updateDiagram = (config, koef1, koef2) => {
            numOfEmployeesReal = parseInt(numOfEmployees.value);
            var numOfEmployeesMin = parseInt(numOfEmployees.getAttribute('min'));
            var numOfEmployeesMax = parseInt(numOfEmployees.getAttribute('max'));
            var k = numOfEmployeesReal / (numOfEmployeesMax - numOfEmployeesMin);
            numOfEmployeesReal = parseInt(numOfEmployeesReal * Math.pow(Math.exp(k - 1), 10));

            if (numOfEmployeesReal > 1000) {
                numOfEmployeesReal = (numOfEmployeesReal / 100).toFixed(0) * 100;
            } else if (numOfEmployeesReal > 100) {
                numOfEmployeesReal = (numOfEmployeesReal / 10).toFixed(0) * 10;
            } else {
                numOfEmployeesReal = (numOfEmployeesReal / 5).toFixed(0) * 5;
            }
            //numOfEmployeesVal.innerText = numOfEmployeesReal.toLocaleString('ru');
            /* >>> */
            numOfEmployeesVal.setAttribute("data-value", numOfEmployeesReal.toLocaleString('ru'))

            avgAnnualSalaryReal = avgAnnualSalary.value;
            var avgAnnualSalaryString = '';
            if (avgAnnualSalaryReal >= 1000) {
                avgAnnualSalaryString = (avgAnnualSalaryReal / 1000).toFixed(1) + ' млн.';
            } else {
                avgAnnualSalaryString = avgAnnualSalaryReal + ' тыс.';
            }
            //avgAnnualSalaryVal.innerText = avgAnnualSalaryString + ' руб.';
            /* >>> */
            avgAnnualSalaryVal.setAttribute("data-value", (avgAnnualSalaryString + ' руб.'))

            employeeTurnoverRateReal = employeeTurnoverRate.value;
            //employeeTurnoverRateVal.innerText = employeeTurnoverRateReal + '%';
            /* >>> */
            employeeTurnoverRateVal.setAttribute("data-value", (employeeTurnoverRateReal + '%'))

            productivityRaw = Math.round(numOfEmployeesReal * (parseInt(avgAnnualSalaryReal) * 1000) * koef1);


            console.log("koef2 = " + koef2)

            turnoverRaw = Math.round(numOfEmployeesReal * (parseInt(avgAnnualSalaryReal) * 1000) * (parseInt(employeeTurnoverRateReal) / 100) * koef2 / 2 );
            console.log("turnoverRaw = " + turnoverRaw)

            var productivityString = '';

            var tempPS, tempTS;


            if (productivityRaw >= 1000000000) {
                tempPS = parseFloat((productivityRaw / 1000000000).toFixed(1));
                productivityString = tempPS + ' МЛРД';
                tempPS = tempPS * 1000000000;
            } else if (productivityRaw >= 1000000) {
                tempPS = parseFloat((productivityRaw / 1000000).toFixed(1));
                productivityString = tempPS + ' МЛН';
                tempPS = tempPS * 1000000;
            } else {
                tempPS = productivityRaw;
                productivityString = (productivityRaw).toLocaleString('ru');
            }

            productivitySavings.innerText = productivityString;

            var turnoverString = '';
            if (turnoverRaw >= 1000000000) {
                tempTS = parseFloat((turnoverRaw / 1000000000).toFixed(1));
                turnoverString = tempTS + ' МЛРД';
                tempTS = tempTS * 1000000000;
            } else if (turnoverRaw >= 1000000) {
                tempTS = parseFloat((turnoverRaw / 1000000).toFixed(1));
                turnoverString = tempTS + ' МЛН';
                tempTS = tempTS * 1000000;
            } else {
                tempTS = turnoverRaw;
                turnoverString = (turnoverRaw).toLocaleString('ru');
            }
            turnoverSavings.innerText = turnoverString;

            console.log("function done");

            //updating the chart
            let totalSavings = tempPS + tempTS;
            if (totalSavings >= 1000000000) {
                chartNumber.innerText = parseFloat((totalSavings / 1000000000).toFixed(1)) + ' МЛРД ₽';
                /* >>> */
                elem_1.innerText = parseFloat((totalSavings / 1000000000).toFixed(1)) + ' МЛРД ₽';
            } else if (totalSavings >= 1000000) {
                chartNumber.innerText = parseFloat((totalSavings / 1000000).toFixed(1)) + ' МЛН ₽';
                /* >>> */
                elem_1.innerText = parseFloat((totalSavings / 1000000).toFixed(1)) + ' МЛН ₽';
            } else {
                chartNumber.innerText = totalSavings.toLocaleString('ru') + ' ₽';
                /* >>> */
                elem_1.innerText = totalSavings.toLocaleString('ru') + ' ₽';
            }
            /* >>> */
            chartNumber.setAttribute("data-value", totalSavings)




            chart
                .data
                .datasets[0]
                .data = [turnoverRaw, productivityRaw];



            function calc() {
                const totalNode = document.getElementById('diagram-total-summ')
                const currNode = document.getElementById('yield-param-input').value

                let total = totalNode.getAttribute("data-value")

                if(currNode !== 0){
                    let realCurr = parseInt(currNode) * 1000000

                    const result = (total, realCurr) => {
                        let result = (((total - (realCurr)) / ((realCurr))) * 100).toFixed(0)
                        if (result > 0) {
                            return result
                        } else {
                            return 0
                        }
                    }
                    console.log(total + "_" + realCurr + "_" + result(total, realCurr))
                    console.log(result(total, realCurr))
                    elem_4.innerText = result(total, realCurr)
                }
            }

            calc()

            chart.update();
        };

        numOfEmployees.addEventListener("input", function () {
            updateDiagram(config, koef1, koef2);
        });
        avgAnnualSalary.addEventListener("input", function () {
            updateDiagram(config, koef1, koef2);
        });
        employeeTurnoverRate.addEventListener("input", function () {
            updateDiagram(config, koef1, koef2);
        });

        formLabels.addEventListener("change", function(){
            checkLab();
            updateDiagram(config, koef1, koef2);
        });


        invests.addEventListener("mouseup", (e) => {
            let curr = parseInt(e.target.value)
            const totalNode = document.getElementById('diagram-total-summ')
            const total = totalNode.getAttribute("data-value");
            console.log(total)
            let realCurr = curr * 1000000
            elem_2.innerText = curr + " МЛН ₽"
            elem_2.setAttribute("data-value", realCurr)
            elem_3.innerText = curr + " МЛН ₽"
            elem_3.setAttribute("data-value", realCurr)

            function calc(total, realCur) {
                let totalPercent = (((total - (realCurr)) / ((realCurr))) * 100).toFixed(0)
                if (totalPercent !== NaN) {
                    return totalPercent
                } else {
                    return ''
                }
            }
            elem_4.innerText = calc(total, realCurr)
        });

        invests.addEventListener("input", (e) => {
            const totalNode = document.getElementById('diagram-total-summ')
            const total = totalNode.getAttribute("data-value");


            let curr = parseInt(e.target.value)
            if(curr < 1000){
                console.log('this.value ' + e.target.value)

                let realCurr = curr * 1000000
                elem_2.innerText = curr + " МЛН ₽"
                elem_2.setAttribute("data-value", realCurr)
                elem_3.innerText = curr + " МЛН ₽"
                elem_3.setAttribute("data-value", realCurr)

                function calc(total, realCur) {
                    let totalPercent = (((total - (realCurr)) / ((realCurr))) * 100).toFixed(0)
                    if (totalPercent !== NaN) {
                        return totalPercent
                    } else {
                        return ''
                    }
                }
                elem_4.innerText = calc(total, realCurr)
            }else{

                invests.value = 999
                console.log('yes')
                return false
            }

        });

    });
</script>

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

<style>
    .page-footer {
        margin-bottom: 0;
    }

    .page-footer-wrapper{
        background-color: #d3d6db;
    }

    .page-footer-container{
        max-width: 1120px;
        margin-inline: auto;
    }

    .container.-subfooter{
        max-width: 1250px;
    }
    .container.-copyright{
        max-width: 1160px;
    }

    .footer-menu,
    .footer-submenu{
        margin: 0;
        padding: 0;
    }

    .footer-menu{
        margin-inline: -2rem;
    }

    .footer-menu{
        display: flex;
    }

    .footer-block,
    .footer-submenu-item{
        list-style-type: none;
    }

    .footer-block{
        padding: 28px 28px 48px;
        margin: 0;
    }

    .footer-block-header{
        display: block;
        text-transform: uppercase;
        color: rgba(0,0,0,0.35);
        padding: 1.5rem 0;
        font-size: 15px;
        font-weight: 600;
        letter-spacing: 0.6px;
    }

    .footer-block.-contacts{
        position: relative;
        color: #fff;
        background-color: #636c72;
    }

    .footer-block.-contacts .footer-block-header{
        color: #c1c4c7;
    }

    .footer-block.-contacts > *{
        position: relative;
    }

    .footer-block.-contacts:before{
        content: '';
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        background-color: #636c72;
        width: 1000%;
    }

    .footer-block.-contacts a{
        color: #fff;
    }

    .page-footer-divider{
        margin: 0;
    }

    .footer-menu-block:nth-child(1){
        flex-basis: 32%;
        max-width: 32%;
    }

    .footer-menu-block:nth-child(2){
        flex-basis: 34%;
        max-width: 34%;
    }

    .footer-menu-block:nth-child(3){
        flex-basis: 18%;
        min-width: 18%;
    }

    .footer-menu-block:nth-child(4){
        flex-basis: 25.5%;
        max-width: 25.5%;
    }

    .footer-menu-block.footer-block.-contacts{
        padding-left: 65px;
    }

    .footer-submenu-item.-logos img{
        margin-bottom: 9px;
    }

    .footer-submenu-item.-logos small{
        font-size: 15px;
        display: block;
        line-height: 1.4;
        letter-spacing: 0.4px;
        letter-spacing: -0.01px;
    }

    .footer-submenu-item.-logos{
        margin: 0;
        padding: 0;
    }

    .footer-submenu-item.-logos + .footer-submenu-item.-logos{
        margin-top: 2rem;
    }

    .footer-menu-block:nth-child(2) .footer-submenu-item{
        line-height: 1.3;
        font-size: 12px;
    }

    .footer-menu-block:nth-child(2) .footer-submenu-item + .footer-submenu-item{
        max-width: 270px;
        margin-top: 17px;
    }

    .footer-menu-block:nth-child(2) .footer-submenu-item.-logos{
        position: relative;
        padding-bottom: 14px;
    }

    @media (min-width: 1200px) {
        .footer-menu-block:nth-child(2) .footer-submenu-item.-logos:after{
            content: '';
            display: block;
            position: absolute;
            bottom: -24px;
            left: 4px;
            width: 28px;
            height: 28px;
            border-left: 1px solid #545658;
            border-bottom: 1px solid #545658;
            border-radius: 0 0 0 14px;
        }
    }

    .footer-menu-block:nth-child(2) .footer-submenu-item:not(:first-child){
        padding-left: 49px;
    }

    .footer-menu-block:nth-child(3) .footer-submenu-item{
        line-height: 1.3;
        font-size: 15px;
        margin: 0;
    }

    .footer-menu-block:nth-child(3) .footer-submenu-item + .footer-submenu-item{
        margin-top: 15px;
    }

    .footer-menu-block.-contacts .footer-submenu-item{
        font-size: 15px;
        margin: 0;
    }

    .footer-menu-block.-contacts .footer-submenu-item a{
        white-space: nowrap;
    }

    .footer-menu-block.-contacts .footer-submenu-item + .footer-submenu-item{
        margin-top: 12px;
    }

    .footer-menu-block.-contacts .footer-submenu{
        position: relative;
        height: 210px;
        margin-bottom: 104px;
    }

    .footer-menu-block.-contacts .footer-submenu:after{
        content: '';
        display: block;
        position: absolute;
        bottom: 0;
        width: 70px;
        height: 4px;
        background-color: #fff;
    }

    .footer-contacts p{
        white-space: nowrap;
    }
    .footer-contacts p:nth-child(1){
        font-size: 22px;
        margin-bottom: 9px;
    }
    .footer-contacts p:nth-child(2){
        font-size: 22px;
        margin-bottom: 17px;
    }

    .footer-contacts address{
        font-size: 15px;
        line-height: 1.4;
        white-space: nowrap;
    }


    .subfooter-list{
        display: flex;
        justify-content: space-between;
        margin: 0;
        padding: 0;
        flex-flow: row wrap;
    }

    .subfooter-list .footer-link{
        flex: 1;
        padding: 0 1.5rem;
    }

    @media (max-width: 1440px) {
        .page-footer-container{
            padding-inline: 2rem;
        }

        .footer-menu-block:nth-child(1) {
            flex-basis: 24.5%;
            max-width: 24.5%;
        }
        .footer-menu-block:nth-child(2) {
            flex-basis: 26%;
            max-width: 26%;
        }

        .footer-block-header {
            padding: 1rem 0;
            font-size: 14px;
        }

        .footer-submenu-item.-logos small {
            font-size: 14px;
        }
        .footer-menu-block:nth-child(3) .footer-submenu-item {
            font-size: 15px;
        }
        .footer-menu-block.-contacts .footer-submenu-item {
            font-size: 15px;
        }

        .footer-contacts p:nth-child(1),
        .footer-contacts p:nth-child(2) {
            font-size: 15px;
        }
        .footer-menu-block.footer-block.-contacts {
            padding-left: 2rem;
        }

    }

    @media (max-width: 1300px) {
        .footer-menu{
            flex-flow: row wrap;
        }
        .footer-menu-block:nth-child(1){
            flex-basis: 30%;
            max-width: 30%;
        }
        .footer-menu-block:nth-child(2){
            flex-basis: 50%;
            max-width: 50%;
        }
        .footer-menu-block:nth-child(3){
            flex-basis: 20%;
            max-width: 20%;
        }
        .footer-menu-block:nth-child(4) {
            flex-basis: 100%;
            max-width: 100%;
        }
        .contacts-wrapper{
            display: flex;
            align-items: center;
        }

        .footer-menu-block.-contacts .footer-submenu{
            height: inherit;
            margin-bottom: 0;
            padding-right: 4rem;
        }
        .footer-menu-block.-contacts .footer-submenu:after {
            top: 0;
            bottom: 0;
            width: 2px;
            right: 0;
            height: inherit;
        }
        .footer-contacts{
            padding-left: 4rem;
        }
    }
    @media (max-width: 993px) {
        .footer-menu-block:nth-child(1){
            flex-basis: 30%;
            max-width: 30%;
        }
        .footer-menu-block:nth-child(2){
            flex-basis: 40%;
            max-width: 40%;
        }
        .footer-menu-block:nth-child(3){
            flex-basis: 30%;
            max-width: 30%;
        }
        .footer-menu-block:nth-child(2) .footer-submenu-item:not(:first-child) {
            padding-left: 0px;
        }
    }

    @media (max-width: 769px) {
        .footer-menu-block:nth-child(1){
            flex-basis: 100%;
            max-width: 100%;
        }
        .footer-menu-block:nth-child(2){
            flex-basis: 60%;
            max-width: 60%;
        }
        .footer-menu-block:nth-child(3){
            flex-basis: 40%;
            max-width: 40%;
        }
        .contacts-wrapper{
            align-items: flex-start;
            flex-direction: column;
        }

        .footer-menu-block.-contacts .footer-submenu{
            height: inherit;
            margin-bottom: 0;
            padding-right: 0rem;
            padding-bottom: 2rem;
        }
        .footer-menu-block.-contacts .footer-submenu:after {
            top: inherit;
            bottom: 0;
            width: 4rem;
            right: 0;
            left: 0;
            height: 2px;
        }
        .footer-contacts{
            padding-left: 0;
            padding-top: 2rem;
        }
    }

    @media (max-width: 577px) {
        .footer-block {
            padding: 1rem;
        }

        .footer-menu-block:nth-child(2){
            flex-basis: 100%;
            max-width: 100%;
        }
        .footer-menu-block:nth-child(3){
            flex-basis: 100%;
            max-width: 100%;
        }
        .footer-menu-block.footer-block.-contacts {
            padding-left: 1rem;
        }
        .footer-link,
        .footer-link span{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    }

    .container.-subfooter{
        padding: 2rem 0;
    }

</style>

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
                        <input type="date" id="current-date" name="current-date" value="2024-01-24" min="2024-01-24">
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
            const checkWorkTime = () => {
                const now = new Date();
                const startWorkTime = new Date();
                startWorkTime.setHours(9, 0, 0, 0);
                const endWorkTime = new Date();
                endWorkTime.setHours(18, 0, 0, 0);
                if (now >= startWorkTime && now <= endWorkTime) {
                    return "Менеджер свяжется с вами в ближайшее время";
                } else {
                    return "Наш менеджер свяжется с вами в рабочее время с 09:00 - 18:00 по Москве";
                }
            }

            const sendForm = (formNode, formData, formNodeID, formURL) => {
                fetch('/ajax.php', {
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
                            const timeStatus = checkWorkTime();
                            console.log(formNodeID);
                            sendMetrik(formNodeID, formURL);
                            Swal.fire('Благодарим за оставленную заявку!', timeStatus, data.status);
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
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        for (var j = 0; j < document.scripts.length; j++) {
            if (document.scripts[j].src === r) {
                return;
            }
        }
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(46152993, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/46152993" style="position:absolute; left:-9999px;" alt=""></div>
</noscript>
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
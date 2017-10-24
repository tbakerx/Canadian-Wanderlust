---
title: Home
content:
    items: '@self.modular'
    order:
        by: default
        dir: asc
        custom:
            - _showcase
            - _highlights
            - _whoweare
            - _gallery
            - _about
metadata:
    description: 'While 2 Canadians wander the world with nothing but the items in their backpacks, this will tell their story.'
body_classes: 'modular header-image fullwidth'
menu: Home
googledesc: 'While 2 Canadians wander the world with nothing but the items in their backpacks, this will tell their story.'
twitterenable: true
twittercardoptions: summary_large_image
twittershareimg: /home/homepage.png
twitterdescription: 'While 2 Canadians wander the world with nothing but the items in their backpacks, this will tell their story.'
articleenabled: false
facebookenable: true
facebookdesc: 'While 2 Canadians wander the world with nothing but the items in their backpacks, this will tell their story.'
facebookimg: /home/homepage.png
onpage_menu: false
form:
    name: contact
    action: /home
    fields:
        -
            name: name
            id: name
            label: Name
            placeholder: 'Enter your name'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            id: email
            label: Email
            placeholder: 'Enter your email address'
            type: email
            validate:
                rule: email
                required: true
        -
            name: message
            label: Message
            size: short
            placeholder: 'Enter your message'
            type: textarea
            validate:
                required: true
        -
            name: g-recaptcha-response
            label: Captcha
            type: captcha
            recaptcha_site_key: 6LdazzEUAAAAAOO09gtIraiU2K5ApYBtQmcIGoV8
            recaptcha_not_validated: 'Captcha not valid!'
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Submit
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to: ['{{ config.plugins.email.from }}', '{{ form.value.email }}']
                subject: '[Feedback] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Thank you for your feedback!'
        -
            display: thankyou
---


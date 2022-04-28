@component('mail::message')
 
# Hello {{ array_get($profile, "fname") }},

We’ve prepared something special for you! During the Expo you’ll be able to easily collect the contact details of Visitors you meet there. 

## How? Pretty simple!

There is no need to download any specially designed app or get any scanners. Visitor’s contact details can be collected by all of your company representatives who have a smartphone, simply by scanning QR codes on badges.

## How do I start?

Open a browser on your smartphone. Go to [https://expojuicer.com](https://expojuicer.com) and select your company name from the list. After the message 'Ready!' you can close the browser and start scanning the visitor IDs!

### iphone / iOS

Use the camera to scan the QR code on the Visitor’s badge. A notification will pop up suggesting you to open the URL - please do so. With every following scan you will just have to use the camera and open the URL saved in the QR code.

### Android

Scan the QR code on the Visitor's badge with Google Lens on your smartphone's camera or with the Scanner application. After scanning, you will be asked to open the URL - please do so. With every following scan you will simply have to use the camera and open the URL saved in the QR code.

Optionally you can add comments to each scan.

**All collected contact details are immediately saved in your Exhibitor’s profile in the “My scans” section.** In order to see all the contact information and your comments you should use the export function. 

@component('mail::button', ['url' => $accountUrl])
Access your Exhibitor’s profile
@endcomponent 

Please let me know if you have any questions!

Best regards,

{{$footer}}

@endcomponent


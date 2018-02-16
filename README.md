# Side slideout box for Magento 2

This module implements an information/promotion/contact me/whather box that slides out on hover.

The content can be set using Magento CMS.

No javacscipt, pure css implementation.

## Installation

### Manually

1. Go to Magento® 2 root folder

2. Enter following commands to install module:

   ```
   composer require gelo/slideout
   ```

   Wait while dependencies are updated.

3. Enter following commands to enable module:

   ```
   php bin/magento module:enable Gelo_Slideout
   php bin/magento setup:upgrade
   php bin/magento cache:clean
   ```

4. If Magento is running in production mode, deploy static content: 

   ```
   php bin/magento setup:static-content:deploy
   ```

5. Enable and configure the extension in Magento Admin under *Stores* >
   *Configuration* > *SIDE SLIDEOUT*
   
6. Create sidebox content content block with id *slideout* (or using your own id set in configuration).



---
title: How do I change my LBRY connected email?
category: troubleshooting
---

In certain cases, you may want to change the email connected to your LBRY App. LBRY stores the email address along with an access token which is unique to each user account. To clear this token, shutdown LBRY and see instructions below for each operating system.

Clearing out this token will allow you to change your email or reset your private access token. When you start up LBRY after clearing the token, you can reconnect an email address by going to **Help** > **Set Email** in the About section.  After setting the email, your LBRY Rewards status should be transferred to the new account. If this does not happen, please reach out to us via [email](mailto:help@lbry.io) with your old/new email addresses. 

## Windows
1. Open the Control Panel, find the Credentials Manager (may need change View By setting)
1. Select **Windows Credentials**
1. Under Generic Credentials, select **LBRY/auth_token** and click **Remove**
1. In the LBRY app, under settings, click on **Clear the Cache** under Application Cache

## MacOS
1. Open the Mac Keychain (Click Finder > Go > Utilities > Keychain Access)
1. Select the **Passwords** category on the left
1. Find **LBRY/auth_token** and remove it

## Ubuntu / Linux 
*(Exact steps may differ slightly)* 
1. Go to **Passwords and Keys**
1. Select the **Login** folder
1. Find **LBRY/auth_token** and right click > Delete to remove it

## Android {#android}
*(Exact steps may differ slightly)*
*Before proceeding, please make sure to backup your wallet if there are funds in it*
1. Go to phone settings
1. Select Apps/Applications
1. Scroll down to find `LBRY Browser`
1. Click on it and select storage. Click `Clear data`
1. Launch the LBRY app. It should ask for your new email

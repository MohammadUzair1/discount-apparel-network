DISCOUNT APPAREL NETWORK, INC. — GITHUB PAGES

This is a static company-information website for Discount Apparel Network, Inc.

DEPLOYMENT
1. Create a GitHub repository and upload the contents of this folder to the repository root.
2. Open Settings > Pages.
3. Under Build and deployment, choose Deploy from a branch, select main and /(root), then save.
4. Open the Pages URL provided by GitHub.

The site is plain HTML and CSS and needs no build command or package installation. GitHub Pages uses index.html as the home page. The PHP files are retained for other hosting environments and are not used by GitHub Pages.

CUSTOM DOMAIN (OPTIONAL)
If you use a custom domain, enter it in repository Settings > Pages before changing DNS settings. At your registrar, point the root/apex domain to these GitHub Pages A-record IPs:
   185.199.108.153
   185.199.109.153
   185.199.110.153
   185.199.111.153
For the www version, add a CNAME record pointing to your GitHub Pages host. Remove conflicting default A records. DNS updates can take up to 24 hours; enable Enforce HTTPS when GitHub makes it available.

Official references:
Apple organization enrollment: https://developer.apple.com/help/account/membership/program-enrollment/
Apple D-U-N-S information: https://developer.apple.com/help/account/membership/D-U-N-S/
GitHub custom domains: https://docs.github.com/en/pages/configuring-a-custom-domain-for-your-github-pages-site
GitHub custom-domain DNS details: https://docs.github.com/en/pages/configuring-a-custom-domain-for-your-github-pages-site/managing-a-custom-domain-for-your-github-pages-site

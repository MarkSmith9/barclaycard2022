# barclaycard2022
Group name: Impact development

## Meeting findings
### Client
- The client runs a cheese shop and is looking to digitise it
- The budget the client has in mind is 5k
	- The client also wants to know what the running costs are
- The client can look through mock-ups today (at 3-4ish probably 4) and tomorrow in order to give feedback (15 mins)

### Website
#### Theming
- The website should not be brightly coloured and shouldn't be too attention grabby and should be subtle instead
- A large portion of the market is elderly
#### Features
- The client wants us to look at competitors for features
- The client wants a loyalty scheme but has none at the moment so features of the scheme will need to be decided
- The client wants a guest login
- The client wants to make sure staff can only access their respective store but also wants a super admin that can do everything
- The client wants to be able to see a dashboard with transactions stock etc
- The gateway needs to have reporting
- All stores are individually stocked
- A store view for each store
- E-mail alerts for low stock
	- customisable e-mails could be an extra feature
- Ryan as an example user
- Guides as he has no idea how to use a computer
- High accessibility by having good contrast
- Extra cheeses from competitors (preferably with a pun)

#### Legal requirements
- pci
- gdpr
- disability act

### Misc
- The client is not looking for a too corporate presentation, instead he wants us to build trust and be memorable
	- This is done by standing out and letting our personalities come through
- The client mentioned tokenisation, not sure what it is we should probably look into it

## Second meeting findings
- Date needs to be changed to 2009
- The third logo combined with the mouse for 4th logo is what the client wants
	- Multiple designs would be beneficial in order to continue to give choice to the client
- He wants the website to be open ended, not "framy" or blocky and wants the website to be scrollable
- He wants social media to be on the website, in addition he wants us to talk and price the management of social media and talk about how much extra exposure it could give
- He wants to have as few separate pages as possible and wants seamless transitions - redirects break the user experience
	- This is especially important for the login - not a separate page but a drop down/pop up
- He wants a user guide
- He talked about how using tokens and feeding transactions will be hard
- He talked how the gateway sends data and how our server should receive it and add it to the database
	- He says that external host should be needed tho dummy data could be used if we cant get it to work
	- If we can't do it we should explain the concept and how we would go about implementing it
- He said he will be available tomorrow ~11:20

## Payment gateway details
### Link to the back-end site:
[back-end site](https://barclaycard.ubctest.cybersource.com/ebc2/)
### login details for the back end site:
Organisation ID: uon2021grp3\
Username: grp3\
Password: UniTest1234

### Test Credit cards that can be used
[card table](test-credit-cards-table.md)

### What I did when modifying the gateway files:
- added appropriate keys where needed
- commented out line 14 on PHPAuth2.php as it was causing issues. Commenting it out seemed to have no effect on functionality.

## Cheese puns
[auto-generated cheese puns](https://pungenerator.org/puns?utf8=%E2%9C%93&q=cheese&commit=Generate+Puns%21)

## ApplicantController
The Applicant Controller is used to manage data in the admin applicant page (appurl/admin/applicant)
- Index; get all applicants from database
- Update; change the status of the applicants

## ClientController
- Index; get all clients from database
- Update; change the status of the clients

## DashboardController
- Index; get all clients, applicants, and portfolios

## FeaturedProjectController
- Index; get all featured portfolio
- Store; create new featured portfolio
- Update; update the position of the featured portfolio
- Destroy; delete a featured portfolio

## ProjectController
- Index; get all portfolios
- Create; show create portfolio frontend
- Store; store a new portfolio
- StoreImage; compress and store image to local folder
- Edit; show edit portfolio frontend
- Update; update a portfolio
- Destroy; delete a portfolio

## QuestionController
- Index; show all questions
- StoreMCQ; create a new MCQ Question
- StoreSlider; create a new Slider Question
- StoreOpenEnded; create a new Open Ended Question
- Destroy; delete a question

## ServiceController
- Index; show all services
- Store; create new service
- StoreImage; compress and store images to local folder
- Update; edit a service
- Destroy; delete a service

## TeamController
- Index; get all team members from database
- StoreTeamMember; create a new team member
- StoreImage; compress and store images to local folder
- UpdateTeamMember; edit a team member
- DestroyTeamMember; destroy a team member
- StoreJob; create a new job
- UpdateJob; update the title of the job
- ChangeOfferable; update the open status of the job
- DestroyJob; destroy a job

## UserController
- PasswordUpdate; updates the admin password

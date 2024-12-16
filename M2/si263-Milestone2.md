<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Shaydul Islam (si263)</td></tr>
<tr><td> <em>Generated: </em> 12/15/2024 11:05:49 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-AR451-M2024/it202-milestone-2-shop-project/grade/si263" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-15T22.48.11Screenshot%202024-12-15%20174720.png.webp?alt=media&token=fd0225bd-c8d6-4f8d-85cc-85beb200b66c"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.07.49Screenshot%202024-12-15%20220623.png.webp?alt=media&token=5ce24631-2dd8-4582-a85e-128c669cff81"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <div><br></div><div>The code flow for creating a product begins with checking if the form<br>is submitted via a POST request. Upon submission, it retrieves and sanitizes the<br>input data (name, description, category, stock, price, and visibility) from the form. Server-side<br>validation ensures that the required fields are correctly filled before inserting the product<br>into the database using a prepared statement. If successful, a success message is<br>displayed, otherwise, an error message is shown.</div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL">https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/si263/IT202-si263/pull/MAIN">https://github.com/si263/IT202-si263/pull/MAIN</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-15T23.19.38Screenshot%202024-12-15%20181859.png.webp?alt=media&token=ed2d962d-34a0-4df5-9214-5bcd40259eeb"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-15T23.21.32Screenshot%202024-12-15%20182024.png.webp?alt=media&token=0e956170-c713-4063-a432-b057779cb775"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-15T23.21.45Screenshot%202024-12-15%20182034.png.webp?alt=media&token=62b1e995-74d8-4802-be4f-b7519f0fd2ba"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-15T23.29.57Screenshot%202024-12-15%20182942.png.webp?alt=media&token=b6343797-d07c-425f-a49d-1c8b8719c424"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <div>The results are displayed in a list of product cards, each showing the<br>product's name, category, price, and links for more information and adding to the<br>cart. The filters are applied via a form at the top of the<br>page, where users can select a category and sort the products by price<br>(low to high or high to low). When the user submits the form,<br>the page reloads with the selected filters applied: the category filter restricts the<br>products to a specific category, and the price sort orders them according to<br>the chosen option. If no filters are applied, all products are shown in<br>the default order.</div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL">https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.21.44Screenshot%202024-12-15%20222134.png.webp?alt=media&token=6ebb7fa8-3bcc-4cfa-8b49-9a702a703f77"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <p>When an admin adds a product, it is inserted into the database and<br>will appear on the shop page. The product&#39;s details, such as name, category,<br>price, and visibility status, are fetched from the database and displayed in a<br>product card. If the product is marked as visible, it will be shown<br>in the list, and the admin can also update or add new products<br>through the provided form.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL">https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.22.06Screenshot%202024-12-15%20222134.png.webp?alt=media&token=3d0b551e-4199-4928-941d-52a544be2483"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.23.33Screenshot%202024-12-15%20222325.png.webp?alt=media&token=ecfcc982-5a92-45e2-a26a-96892ea23755"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the edit button visible to the Admin on the Admin Product List Page (The admin page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.24.37Screenshot%202024-12-15%20222325.png.webp?alt=media&token=402c7350-b3a7-4bdd-956c-9cb2c293f382"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.26.28Screenshot%202024-12-15%20222325.png.webp?alt=media&token=c8eeb0cb-c16f-42ca-bd8d-11323411da64"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.26.39Screenshot%202024-12-15%20222601.png.webp?alt=media&token=11ee708a-77a8-4df1-921a-90de97c0be33"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.26.47Screenshot%202024-12-15%20222614.png.webp?alt=media&token=01cb2fcc-8a5a-4e99-96fd-679be91f3fdc"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <div>&nbsp;this script allows for displaying a list of products, editing product details, and<br>deleting products from the database. The edit form is toggled by JavaScript, and<br>the update/delete actions are handled by form submissions.</div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL">https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.30.12Screenshot%202024-12-15%20222956.png.webp?alt=media&token=3a3ab737-6cf5-471f-a073-151eebdc43ba"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.30.29Screenshot%202024-12-15%20223003.png.webp?alt=media&token=11c104f4-52ec-4ef3-af13-6cbd158654d9"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.31.17Screenshot%202024-12-15%20223110.png.webp?alt=media&token=e172467d-8f86-4b7a-85e9-47189997d0b4"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <div>The script validates the product ID, fetches the details of the product from<br>the database, and displays them on the webpage. It also includes error handling<br>for invalid product IDs and issues during database interactions.</div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL">https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.36.27Screenshot%202024-12-15%20223618.png.webp?alt=media&token=7bb22c1f-56a6-4137-96a1-4857fee78777"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.40.23Screenshot%202024-12-15%20224003.png.webp?alt=media&token=aec7728e-0879-42d6-b079-37460ca1fd1c"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.41.53Screenshot%202024-12-15%20224134.png.webp?alt=media&token=68f2ee57-b34e-4116-825e-b07186a870dd"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <div class="flex max-w-full flex-col flex-grow"><div data-message-author-role="assistant" data-message-id="d3900388-0126-4e81-8a48-eb643b544653" dir="auto" class="min-h-8 text-message flex w-full flex-col<br>items-end gap-2 whitespace-normal break-words text-start [.text-message+&amp;]:mt-5" data-message-model-slug="gpt-4o-mini"><div class="flex w-full flex-col gap-1 empty:hidden first:pt-[3px]"><div<br>class="markdown prose w-full break-words dark:prose-invert light"><p>The cart system allows users to add products<br>to their cart, with each user having one cart linked to their session<br>or user ID. If the user is not logged in, they are prompted<br>to log in before adding items to the cart. The cart is stored<br>in a database, and actions like adding, updating, and removing items are performed<br>based on the user's unique ID to ensure only their items are managed<br>in the cart.</p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p></div></div></div></div><div class="mb-2 flex gap-3 empty:hidden -ml-2"><div class="items-center justify-start rounded-xl p-1 flex"><div<br>class="flex items-center"><span class="" data-state="closed"><button class="rounded-lg text-token-text-secondary hover:bg-token-main-surface-secondary" aria-label="Read aloud" data-testid="voice-play-turn-action-button"><span class="flex h-[30px] w-[30px]<br>items-center justify-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-md-heavy"><path fill-rule="evenodd" clip-rule="evenodd"<br>d="M11 4.9099C11 4.47485 10.4828 4.24734 10.1621 4.54132L6.67572 7.7372C6.49129 7.90626 6.25019 8.00005 6 8.00005H4C3.44772<br>8.00005 3 8.44776 3 9.00005V15C3 15.5523 3.44772 16 4 16H6C6.25019 16 6.49129 16.0938<br>6.67572 16.2629L10.1621 19.4588C10.4828 19.7527 11 19.5252 11 19.0902V4.9099ZM8.81069 3.06701C10.4142 1.59714 13 2.73463 13<br>4.9099V19.0902C13 21.2655 10.4142 22.403 8.81069 20.9331L5.61102 18H4C2.34315 18 1 16.6569 1 15V9.00005C1 7.34319<br>2.34315 6.00005 4 6.00005H5.61102L8.81069 3.06701ZM20.3166 6.35665C20.8019 6.09313 21.409 6.27296 21.6725 6.75833C22.5191 8.3176 22.9996<br>10.1042 22.9996 12.0001C22.9996 13.8507 22.5418 15.5974 21.7323 17.1302C21.4744 17.6185 20.8695 17.8054 20.3811 17.5475C19.8927<br>17.2896 19.7059 16.6846 19.9638 16.1962C20.6249 14.9444 20.9996 13.5175 20.9996 12.0001C20.9996 10.4458 20.6064 8.98627<br>19.9149 7.71262C19.6514 7.22726 19.8312 6.62017 20.3166 6.35665ZM15.7994 7.90049C16.241 7.5688 16.8679 7.65789 17.1995 8.09947C18.0156<br>9.18593 18.4996 10.5379 18.4996 12.0001C18.4996 13.3127 18.1094 14.5372 17.4385 15.5604C17.1357 16.0222 16.5158 16.1511<br>16.0539 15.8483C15.5921 15.5455 15.4632 14.9255 15.766 14.4637C16.2298 13.7564 16.4996 12.9113 16.4996 12.0001C16.4996 10.9859<br>16.1653 10.0526 15.6004 9.30063C15.2687 8.85905 15.3578 8.23218 15.7994 7.90049Z" fill="currentColor"></path></svg></span></button></span><span class="" data-state="closed"><button class="rounded-lg<br>text-token-text-secondary hover:bg-token-main-surface-secondary" aria-label="Copy" data-testid="copy-turn-action-button"><span class="flex h-[30px] w-[30px] items-center justify-center"><svg width="24" height="24" viewBox="0 0<br>24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-md-heavy"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 5C7 3.34315 8.34315 2 10<br>2H19C20.6569 2 22 3.34315 22 5V14C22 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569<br>22 14 22H5C3.34315 22 2 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9<br>7H14C15.6569 7 17 8.34315 17 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523<br>4 19 4H10C9.44772 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4<br>10V19C4 19.5523 4.44772 20 5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523<br>9 14 9H5Z" fill="currentColor"></path></svg></span></button></span><div class="flex"><span class="" data-state="closed"><button class="rounded-lg text-token-text-secondary hover:bg-token-main-surface-secondary" aria-label="Good response" data-testid="good-response-turn-action-button"><span<br>class="flex h-[30px] w-[30px] items-center justify-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"<br>class="icon-md-heavy"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.1318 2.50389C12.3321 2.15338 12.7235 1.95768 13.124 2.00775L13.5778 2.06447C16.0449 2.37286 17.636<br>4.83353 16.9048 7.20993L16.354 8.99999H17.0722C19.7097 8.99999 21.6253 11.5079 20.9313 14.0525L19.5677 19.0525C19.0931 20.7927 17.5124 22<br>15.7086 22H6C4.34315 22 3 20.6568 3 19V12C3 10.3431 4.34315 8.99999 6 8.99999H8C8.25952 8.99999<br>8.49914 8.86094 8.6279 8.63561L12.1318 2.50389ZM10 20H15.7086C16.6105 20 17.4008 19.3964 17.6381 18.5262L19.0018 13.5262C19.3488 12.2539<br>18.391 11 17.0722 11H15C14.6827 11 14.3841 10.8494 14.1956 10.5941C14.0071 10.3388 13.9509 10.0092 14.0442<br>9.70591L14.9932 6.62175C15.3384 5.49984 14.6484 4.34036 13.5319 4.08468L10.3644 9.62789C10.0522 10.1742 9.56691 10.5859 9 10.8098V19C9<br>19.5523 9.44772 20 10 20ZM7 11V19C7 19.3506 7.06015 19.6872 7.17071 20H6C5.44772 20 5<br>19.5523 5 19V12C5 11.4477 5.44772 11 6 11H7Z" fill="currentColor"></path></svg></span></button></span><span class="" data-state="closed"><button class="rounded-lg text-token-text-secondary<br>hover:bg-token-main-surface-secondary" aria-label="Bad response" data-testid="bad-response-turn-action-button"><span class="flex h-[30px] w-[30px] items-center justify-center"><svg width="24" height="24" viewBox="0 0<br>24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-md-heavy"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.8727 21.4961C11.6725 21.8466 11.2811 22.0423 10.8805<br>21.9922L10.4267 21.9355C7.95958 21.6271 6.36855 19.1665 7.09975 16.7901L7.65054 15H6.93226C4.29476 15 2.37923 12.4921 3.0732 9.94753L4.43684<br>4.94753C4.91145 3.20728 6.49209 2 8.29589 2H18.0045C19.6614 2 21.0045 3.34315 21.0045 5V12C21.0045 13.6569 19.6614<br>15 18.0045 15H16.0045C15.745 15 15.5054 15.1391 15.3766 15.3644L11.8727 21.4961ZM14.0045 4H8.29589C7.39399 4 6.60367 4.60364<br>6.36637 5.47376L5.00273 10.4738C4.65574 11.746 5.61351 13 6.93226 13H9.00451C9.32185 13 9.62036 13.1506 9.8089 13.4059C9.99743<br>13.6612 10.0536 13.9908 9.96028 14.2941L9.01131 17.3782C8.6661 18.5002 9.35608 19.6596 10.4726 19.9153L13.6401 14.3721C13.9523 13.8258<br>14.4376 13.4141 15.0045 13.1902V5C15.0045 4.44772 14.5568 4 14.0045 4ZM17.0045 13V5C17.0045 4.64937 16.9444 4.31278<br>16.8338 4H18.0045C18.5568 4 19.0045 4.44772 19.0045 5V12C19.0045 12.5523 18.5568 13 18.0045 13H17.0045Z" fill="currentColor"></path></svg></span></button></span></div><span<br>class="hidden"></span><span class="" data-state="closed"><button type="button" id="radix-:r1ud:" aria-haspopup="menu" aria-expanded="false" data-state="closed" class="cursor-pointer h-[30px] rounded-md px-1 text-token-text-secondary<br>hover:bg-token-main-surface-secondary"><div class="flex items-center pb-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-md"><path<br>d="M3.06957 10.8763C3.62331 6.43564 7.40967 3 12 3C14.2824 3 16.4028 3.85067 18.0118 5.25439V4C18.0118 3.44772<br>18.4595 3 19.0118 3C19.5641 3 20.0118 3.44772 20.0118 4V8C20.0118 8.55228 19.5641 9 19.0118<br>9H15C14.4477 9 14 8.55228 14 8C14 7.44772 14.4477 7 15 7H16.9571C15.6757 5.76379 13.9101<br>5 12 5C8.43108 5 5.48466 7.67174 5.0542 11.1237C4.98586 11.6718 4.48619 12.0607 3.93815 11.9923C3.39011<br>11.924 3.00123 11.4243 3.06957 10.8763ZM20.0618 12.0077C20.6099 12.076 20.9988 12.5757 20.9304 13.1237C20.3767 17.5644 16.5903<br>21 12 21C9.72322 21 7.60762 20.1535 5.99999 18.7559V20C5.99999 20.5523 5.55228 21 4.99999 21C4.44771<br>21 3.99999 20.5523 3.99999 20V16C3.99999 15.4477 4.44771 15 4.99999 15H8.99999C9.55228 15 9.99999 15.4477<br>9.99999 16C9.99999 16.5523 9.55228 17 8.99999 17H7.04285C8.32433 18.2362 10.0899 19 12 19C15.5689 19<br>18.5153 16.3283 18.9458 12.8763C19.0141 12.3282 19.5138 11.9393 20.0618 12.0077Z" fill="currentColor"></path></svg><span class="overflow-hidden text-clip whitespace-nowrap<br>text-sm"></span></div></button></span></div></div></div><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL">https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.45.09Screenshot%202024-12-15%20224441.png.webp?alt=media&token=30368346-1435-4800-95e0-a84a2651fc56"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <div>From a code perspective, the cart is displayed by fetching the cart items<br>from the database, where each product's details (like name, price, and quantity) are<br>stored. The SELECT * FROM cart query retrieves all the items currently in<br>the user's cart. For each item, the code calculates the subtotal by multiplying<br>the price by the quantity ($subtotal = $item['price'] * $item['quantity'];), which is then<br>shown in the cart table. The total price for the cart is calculated<br>by summing up the subtotals of all items ($total += $subtotal;) and is<br>displayed at the bottom of the cart table.</div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL">https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.47.24Screenshot%202024-12-15%20224631.png.webp?alt=media&token=a8475326-8f1f-4b77-9a5f-5055310e62ef"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.47.32Screenshot%202024-12-15%20224641.png.webp?alt=media&token=1376288a-7d29-4411-8f14-fea8d99d1c34"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.48.12Screenshot%202024-12-15%20224802.png.webp?alt=media&token=03cedef0-c2d1-45da-8ed5-72070c928142"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.48.47Screenshot%202024-12-15%20224835.png.webp?alt=media&token=49f2f7e0-ef2d-4743-8325-1eb5c2d933fc"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <div>The update process in the cart involves submitting a form that contains the<br>product ID and the desired quantity. When a user submits the form to<br>update the quantity, the code checks if the quantity is valid (i.e., greater<br>than 0) before updating the database. If the quantity is 0 or negative,<br>the code doesn't allow the update, ensuring that an invalid quantity cannot be<br>set. Specifically, the input type="number" in the form allows users to input a<br>positive integer, and the backend handles the validation by ensuring that only valid<br>quantities are accepted (the min="1" attribute helps prevent non-positive values, though further backend<br>checks could be added to enforce this). If an invalid quantity (0 or<br>negative) is provided, the system would either show an error or simply not<br>process the update.</div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL">https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.50.05Screenshot%202024-12-15%20224950.png.webp?alt=media&token=b9ac2e69-0752-4b3d-b589-130eb73fc1b0"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.50.09Screenshot%202024-12-15%20224957.png.webp?alt=media&token=7de0fc1e-27b8-4e63-81c0-2c707f151ee5"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.50.41Screenshot%202024-12-15%20225025.png.webp?alt=media&token=2b3c2c49-056f-48a5-a8e7-7f600785a5a8"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.50.45Screenshot%202024-12-15%20225032.png.webp?alt=media&token=9addaeb8-2f0e-45b3-b526-191ae76808a2"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>The Remove Item process deletes a specific product from the cart by matching<br>its product_id and executing a DELETE query in the database. The Clear Cart<br>process removes all products from the cart by executing a DELETE query that<br>clears all entries in the cart table. Both processes use try-catch blocks to<br>handle potential errors and ensure smooth deletion.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL">https://github.com/si263/IT202-si263/pull/WORKEDONMAIN/NO PULL</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fsi263%2F2024-12-16T03.57.04Screenshot%202024-12-15%20225654.png.webp?alt=media&token=92349a6b-9dcf-452c-819c-4c8bbae7221d"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-AR451-M2024/it202-milestone-2-shop-project/grade/si263" target="_blank">Grading</a></td></tr></table>
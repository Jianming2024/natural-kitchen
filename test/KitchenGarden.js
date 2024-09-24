import { Selector } from "testcafe"

/* fixture`Kitchen Garden test`
    .page("http://kitchen-garden.local/");

test("enter comments", async t => {
    await t
        .navigateTo("http://kitchen-garden.local/")
        .click(Selector("a").withText("Broccoli"))
        .typeText("#comment", "It is so fresh!")
        .click("#submit")
        .expect(Selector(".card-text").innerText).eql("It is so fresh")
}) */

fixture`Kitchen Garden test`
    .page("http://kitchen-garden.local/wp-login.php?redirect_to=http%3A%2F%2Fkitchen-garden.local%2Fwp-admin%2F&reauth=1");

test("delete comments", async t => {  
    const bulkActionSelect = Selector("#bulk-action-selector-bottom");    
    const bulkActionOption = bulkActionSelect.find("option"); 
    
    await t
        .typeText("#user_login", "admin")
        .typeText("#user_pass", "123456")
        .click("#wp-submit")
        .expect(Selector("#wp-admin-bar-site-name").innerText).eql("Kitchen Garden")
        .click("#menu-comments")        
        .click("#cb-select-all-1")
        .click(bulkActionSelect)
        .click(bulkActionOption.withText("Move to Trash"))
        .click("#doaction2")                
        .expect(Selector("#the-comment-list").innerText).contains("No comments found.")  
        .click("#wp-admin-bar-site-name")    
        .click(Selector("a").withText("Broccoli")) 
        .takeScreenshot({fullPage: true})        
            
}) 
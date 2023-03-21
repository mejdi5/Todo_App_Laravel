<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="doc.css">
        <title>Todo App</title>
    </head>
    <body class="antialiased">
         <div class="sidebar">
            <ul>
                <li class="api-item">
                   <a href="#listing"><h3>Listing tags</h3></a>
                </li>
                <li class="api-item">
                    <a href="#add">
                        <h3>Add new tag</h3>
                    </a>
                </li>
                <li class="api-item">
                    <a href="#update">
                        <h3>Update tag</h3>
                    </a>
                </li>
            </ul>
         </div>
         <div>

         </div>
         <div class="apis">
            <div class="listing" id="listing">
                <div class="api-info">
                    <div>
                        <h2>Listing tags</h2>
                    </div>
                    <div class="api-description">
                        <p>Get list of tags</p>
                        <p><span style="background-color:green;padding:3px;border-radius:3px">GET</span> http://127.0.0.1:8000/api/show-tags</p>
                        <div style="display:flex;flex-direction:column;gap:5px">
                            <h4>Parameters:</h4>
                            <p><strong>status</strong> <small>number</small> Optional</p>
                            <p>Must be between 0 and 1.</p>
                        </div>
                    </div>
                </div>
                <div class="api-response">
                     <h3>Example Request</h3>
                     <p>curl --location 'http://127.0.0.1:8000/api/show-tags?status=1' \ <br>
                        --header 'Accept: application/json'
                     </p>
                     <div>
                        <h4 style="background-color:lightgrey;display:inline;padding:5px">Example Response (200)</h4>
                        <p style="margin: 10px 0px">[ <br>
                            { <br>
                                <span style="color:red">"id"</span> : 1, <br>
                                <span style="color:red">"title"</span>: "Quaerat eos architecto cum earum.", <br>
                                <span style="color:red">"description"</span>: "In necessitatibus minus eum reprehenderit dolorem culpa et.", <br>
                                <span style="color:red">"status"</span>: 1, <br>
                                <span style="color:red">"created_at"</span>: "2023-03-20T11:23:19.000000Z", <br>
                                <span style="color:red">"updated_at"</span>: "2023-03-20T11:23:19.000000Z" <br>
                            }, <br>
                            { <br>
                                <span style="color:red">"id"</span>: 3,
                                <span style="color:red">"title"</span>: "Eum ut et voluptas repellat.", <br>
                                <span style="color:red">"description"</span>: "Et voluptatem deserunt et dolores.", <br>
                                <span style="color:red">"status"</span>: 1, <br>
                                <span style="color:red">"created_at"</span>: "2023-03-20T11:23:19.000000Z", <br>
                                <span style="color:red">"updated_at"</span>: "2023-03-20T11:23:19.000000Z" <br>
                          }, <br>
                            { <br>
                                <span style="color:red">"id"</span>: 5, <br>
                                <span style="color:red">"title"</span>: "Consequuntur qui sit ratione.", <br>
                                <span style="color:red">"description"</span>: "Occaecati voluptas pariatur in ut labore.", <br>
                                <span style="color:red">"status"</span>: 1, <br>
                                <span style="color:red">"created_at"</span>: "2023-03-20T11:23:19.000000Z", <br>
                                <span style="color:red">"updated_at"</span>: "2023-03-20T11:23:19.000000Z"
                            <br> } <br>
                            ]
                        </p>
                        <h4 style="background-color:lightgrey;display:inline;padding:5px">Example Response (422)</h4>
                        <p style="margin: 10px 0px">
                            { <br>
                                <span style="color:red">"message"</span>  "The given data was invalid.", <br>
                                <span style="color:red">"errors"</span>: { <br>
                                <span style="color:red">"status"</span>: ["The status must be 0 or 1" ]
                               <br> }
                            <br> }, <br>
                        </p>
                     </div>
                </div>
            </div>
            <hr>
            <div class="add" id="add">
                <div class="api-info">
                    <div>
                        <h2>Add new tags</h2>
                    </div>
                    <div class="api-description">
                        <p>Post new tag</p>
                        <p><span style="background-color:orange;padding:3px;border-radius:3px">POST</span> http://127.0.0.1:8000/api/new-tag</p>
                        <div style="display:flex;flex-direction:column;gap:5px">
                            <h4>Body parameters:</h4>
                            <p><strong>title</strong> <small>string</small> Unique</p>
                            <p><strong>description</strong> <small>string</small> Optional</p>
                        </div>
                    </div>
                </div>
                <div class="api-response">
                    <h3>Example Request</h3>
                     <p>curl --location 'http://127.0.0.1:8000/api/new-tag' \ <br>
                        --header 'Accept: application/json' \ <br>
                        --header 'Content-Type: application/json' \ <br>
                     </p>
                     <div>
                        <h4 style="background-color:lightgrey;display:inline;padding:5px">Example Response (201)</h4>
                        <p style="margin: 10px 0px">
                            { <br>
                                <span style="color:red">"id"</span> : 11, <br>
                                <span style="color:red">"title"</span>: "Quaerat eos architecto cum earum.", <br>
                                <span style="color:red">"description"</span>: "In necessitatibus minus eum reprehenderit dolorem culpa et.", <br>
                                <span style="color:red">"status"</span>: 0, <br>
                                <span style="color:red">"created_at"</span>: "2023-03-20T11:23:19.000000Z", <br>
                                <span style="color:red">"updated_at"</span>: "2023-03-20T11:23:19.000000Z" <br>
                            },
                        </p>
                        <h4 style="background-color:lightgrey;display:inline;padding:5px">Example Response (422)</h4>
                        <p style="margin: 10px 0px">
                            { <br>
                                <span style="color:red">"message"</span>  "The given data was invalid.", <br>
                                <span style="color:red">"errors"</span>: { <br>
                                <span style="color:red">"title"</span>: ["The title must be unique" ]
                               <br> }
                            <br> }, <br>
                        </p>
                     </div>
                </div>
            </div>
            <hr>
            <div class="update" id="update">
                <div class="api-info">
                    <div>
                        <h2>Update tag</h2>
                    </div>
                    <div class="api-description">
                       <p>Update a tag</p>
                       <p><span style="background-color:blue;padding:3px;border-radius:3px">PUT</span> http://127.0.0.1:8000/api/tag</p>
                        <div style="display:flex;flex-direction:column;gap:5px">
                            <h4>Parameters:</h4>
                            <p><strong>id</strong> <small>number</small></p>
                            <h4>Body parameters:</h4>
                            <p>At least one of these parameters is required</p>
                            <p><strong>title</strong> <small>string</small></p>
                            <p><strong>description</strong> <small>string</small></p>
                            <p><strong>status</strong> <small>number</small></p>
                        </div>
                    </div>
                </div>
                <div class="api-response">
                    <h3>Example Request</h3>
                     <p>curl --location --request PUT 'http://127.0.0.1:8000/api/tag/10' \ <br>
                        --header 'Accept: application/json' \ <br>
                        --header 'Content-Type: application/json' \
                     </p>
                     <div>
                        <h4 style="background-color:lightgrey;display:inline;padding:5px">Example Response (200)</h4>
                        <p style="margin: 10px 0px">
                            { <br>
                                <span style="color:red">"id"</span> : 10, <br>
                                <span style="color:red">"title"</span>: "Quaerat eos architecto cum earum.", <br>
                                <span style="color:red">"description"</span>: "In necessitatibus minus eum reprehenderit dolorem culpa et.", <br>
                                <span style="color:red">"status"</span>: 1, <br>
                                <span style="color:red">"created_at"</span>: "2023-03-20T11:23:19.000000Z", <br>
                                <span style="color:red">"updated_at"</span>: "2023-03-20T11:23:19.000000Z" <br>
                            },
                        </p>
                        <h4 style="background-color:lightgrey;display:inline;padding:5px">Example Response (422)</h4>
                        <p style="margin: 10px 0px">
                            { <br>
                                <span style="color:red">"message"</span>  "The given data was invalid.", <br>
                                <span style="color:red">"errors"</span>: { <br>
                                <span style="color:red">"title"</span>: ["The title field is required when none of description / status are present."] <br>
                                <span style="color:red">"status"</span>: ["The status field is required when none of title / description are present."]
                               <br> }
                            <br> }, <br>
                        </p>
                     </div>
                </div>
            </div>
         </div>
    </body>
</html>

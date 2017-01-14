<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8"
    </head>
    <title>SSH-Key Editor Example</title>
    <header>
        <h1> SSH-Key User </h1>
    </header>
<body>
<main> <h2>Exaple User</h2>
    <ul>
        <li> Name: Malente Veza</li>
        <li>Age: 26</li>
        <li>Occupation: Unemployed</li>
        <li>Technology: Has lower end HP laptop running windows 10</li>
        <li> Needs: Be able to follow the screncast on how to get to and edit SSH-Key editor on bootcamp-coders.cnm.edu</li>
        <li>Will be able to copy past/delete SSH-Keys into bootcamp-coders.cnm.edu</li>
    </ul>
        <h2>Use Case</h2>
        Malente has just spent 30 min to an hour watching and rewatching SSH-key edioter for his bootcamp coders class. After pasting a SSH key he realized he entered the wrong number of bits for his SSH-key. Luckily the universal symbole for delete is located right next to his previous SSH-key. He deletes and adds his new SSH-key.
        <h2>Example Flow</h2>
        <ol>
            <li>Opens boot-coders.cnm.edu/prework.</li>
            <li>Server fetches information.</li>
            <li>Hits SSH-key editor and page askes for log in.</li>
            <li>Page reloads and displays Add SSH key and incorrect SSH-key is displayed.</li>
            <li>Malente hits delete and pastes new SSH-key. </li>
            <li>Server deletes and adds new SSH-key.</li>
            <li>Malente sees the SSH-key added display.</li>
        </ol>
    <h2>Conceptual Model</h2>
    <h3>Entities &amp; Attributes</h3>
    Profile
    <ul>
        <li>profileId (primary key)</li>
        <li>profileAtHandle</li>
        <li>profileEmail</li>
        <li>profileHash</li>
        <li>profileSalt</li>
    </ul>
    SSH-key
    <ul>
        <li>ssh-keyId(primary key)</li>
        <li>ssh-keyProfileId(foreign key)</li>
        <li>ssh-keyContent</li>
        <li>ssh-keyDate</li>
    </ul>
    SSH-keys
    <ul>
    <li>ssh-keysProfileId(foreign key)</li>
    <li>ssh-keysFingerprintId(foreign key)</li>
    <li>ssh-keysDate</li>
    </ul>
    <h2>Relations</h2>
    <ul>
        <li>One Profile can upload many ssh-keys (1 to n)</li>
    </ul>
        </main>
    </body>
</html>
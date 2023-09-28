/****
 *  Posting Data functions
 */
async function postData(url = '', data = {}) {
  try {
    const response = await fetch(url, {
      method: 'POST',
      body: data,
    })
    return response.json() // parses JSON response into native JavaScript objects
  } catch (error) {
    console.error(`Fetch error: ${error.message}`)
  }
}

async function postData2(url = '', data = {}) {
  try {
    const response = await fetch(url, {
      method: 'POST',
      body: data,
    })
    return response.text() // parses JSON response into native JavaScript objects
  } catch (error) {
    console.error(`Fetch error: ${error.message}`)
  }
}

/****
 *  Posting Data functions
 */
export {postData, postData2}
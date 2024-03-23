<template>
    <div>
        <div class="container mt-5 shadow rounded-4 p-4">
            <h2>Where’s your next adventure?</h2>
            <p class="mb-4">Let's make your next trip one to remember, book now!</p>
            <form>
              <div class="mb-3">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="tripType" id="oneWay" value="oneWay">
                  <label class="form-check-label" for="oneWay">One Way</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="tripType" id="roundTrip" value="roundTrip" checked>
                  <label class="form-check-label" for="roundTrip">Round Trip</label>
                </div>
              </div>
             <div class="d-flex justify-content-between">
              <div class="mb-3 w-100 pe-5">
                <label for="from">From:</label>
                <select class="form-select p-3" id="from" name="from">
                  <option selected>Select departure</option>
                  <!-- Add options for departure locations here -->
                </select>
              </div>
              <div class="mb-3 w-100 ps-5">
                <label for="to">To:</label>
                <select class="form-select p-3" id="to" name="to">
                  <option selected>Select destination</option>
                  <!-- Add options for destination locations here -->
                </select>
              </div>
            </div>
            <div class="d-flex justify-content-between">
               <div class="mb-3 w-100 pe-4">
                <label for="departureDate">Departure Date:</label>
                <input type="date" class="form-control p-3" id="departureDate" name="departureDate">
              </div>
              <div class="mb-3 w-100 px-4 ">
                <label for="passengers">Number of Passengers:</label>
                <input type="number" class="form-control p-3" id="passengers" name="passengers" min="1" value="1">
              </div>
              <button type="submit" class="btn w-100 btn-danger">Search Trips</button>
            </div>
        </form>
          </div>
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>

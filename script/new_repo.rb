#!/usr/bin/env ruby

require 'json'

user = 'Squareweave'

print "Squareweave's bitbucket password: "
password = gets.chomp

print "Checking... "

repos_response = `curl -s --user #{user}:'#{password}' https://api.bitbucket.org/1.0/user/repositories/`

# Die if we don't get real JSON back
begin
  repos = JSON.parse(repos_response)
rescue
  abort "Password is incorrect."
end

puts "OK!"

puts "What is the name of the new repository you want to make?"
repo_name = gets.chomp

print "Creating a repository called #{repo_name}... "

`curl -s --request POST --user #{user}:'#{password}' https://api.bitbucket.org/1.0/repositories/ --data name='#{repo_name}' --data scm=git --data is_private=True`

puts "Success!"